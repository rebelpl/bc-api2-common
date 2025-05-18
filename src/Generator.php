<?php
namespace Rebel\BCApi2;

readonly class Generator
{
    const EXCLUDED_ENTITYSETS = [ 'entityDefinitions', 'companies' ];

    private string $outputDir;
    private string $namespacePrefix;
    private string $apiPath;

    public function __construct(
        private Metadata $metadata,
        string $apiPath = 'v2.0',
        string $outputDir = 'build/',
        string $namespacePrefix = '')
    {
        $this->apiPath = trim($apiPath, '/');
        $this->outputDir = rtrim($outputDir, '/\\') . DIRECTORY_SEPARATOR;
        $this->namespacePrefix = rtrim($namespacePrefix, '\\') . '\\';
    }

    public function generateAll(bool $overwrite = false): void
    {
        $this->generateAllEnumTypes($overwrite);
        foreach ($this->metadata->getEntitySets() as $entitySet) {
            $name = $entitySet->getName();
            if (!in_array($name, self::EXCLUDED_ENTITYSETS)) {
                echo ' - ' . $name . PHP_EOL;
                $this->generateRepositoryFor($name, $overwrite);
                $this->generatePropertiesFor($name, $overwrite);
                $this->generateRecordFor($name, $overwrite);
            }
        }
    }

    private function buildOutputPath(string $folder, ?string $filename = null): string
    {
        return $this->outputDir .
            str_replace('.', DIRECTORY_SEPARATOR, $this->metadata->getNamespace()) .
            DIRECTORY_SEPARATOR . $folder .
            DIRECTORY_SEPARATOR . $filename;
    }

    private function createOutputDir(string $name): void
    {
        $dir = $this->buildOutputPath($name);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    private function buildNamespace(string $name): string
    {
        return ltrim($this->namespacePrefix .
            str_replace('.', '\\', $this->metadata->getNamespace()) .
            '\\' . $name, '\\');
    }

    public function generateAllEnumTypes(bool $overwrite = false): void
    {
        $enumTypes = $this->metadata->getEnumTypes();
        if (empty($enumTypes)) {
            return; // No enums to generate
        }

        foreach ($enumTypes as $type) {
            $this->generateEnumTypeFor($type, $overwrite);
        }
    }

    public function generateEnumTypeFor(string $name, bool $overwrite = false): bool
    {
        $enumMembers = $this->metadata->getEnumTypeMembers($name);
        if (is_null($enumMembers)) {
            throw new Exception("Enum type '{$name}' not found in metadata.");
        }

        // Determine namespace and class name
        $namespace = $this->buildNamespace('Enums');
        $className = ucfirst($name);

        // Check if file exists and we're not overwriting
        $outputFile = $this->buildOutputPath('Enums', $className . '.php');
        if (file_exists($outputFile) && !$overwrite) {
            return false;
        }

        // Build enum cases
        $enumCases = [];
        foreach ($enumMembers as $value) {
            $name = preg_replace('/_x002[a-zA-Z0-9]_/', '', $value) ?: 'Null';
            $enumCases[] = "    case {$name} = '$value';";
        }

        // Generate file content
        $enumContent = implode("\n", $enumCases);
        $content = <<<PHP
<?php
namespace {$namespace};

enum {$className}: string
{
{$enumContent}
}
PHP;

        $this->createOutputDir('Enums');
        return file_put_contents($outputFile, $content) !== false;
    }

    public function generateRepositoryFor(string $name, bool $overwrite = false): bool
    {
        $entitySet = $this->metadata->getEntitySet($name) ?? $this->metadata->getEntitySetFor($name);
        if (!$entitySet) {
            throw new Exception("Entity set '{$name}' not found in metadata.");
        }

        $entityType = $entitySet->getEntityType();
        $entityName = ucfirst($entityType->getName());

        // Determine namespace and class name
        $namespace = $this->buildNamespace($entityName);
        $className = 'Repository';

        // Check if file exists and we're not overwriting
        $outputFile = $this->buildOutputPath($entityName, $className . '.php');
        if (file_exists($outputFile) && !$overwrite) {
            return false;
        }

        $content = <<<PHP
<?php
namespace {$namespace};

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

readonly class {$className} extends EntityRepository
{
    public function __construct(Client \$client)
    {
        parent::__construct(\$client, '{$entitySet->getName()}', '{$this->apiPath}', Record::class);
    }
}
PHP;

        $this->createOutputDir($entityName);
        return file_put_contents($outputFile, $content) !== false;
    }

    public function generatePropertiesFor(string $name, bool $overwrite = false): bool
    {
        $entitySet = $this->metadata->getEntitySet($name) ?? $this->metadata->getEntitySetFor($name);
        if (!$entitySet) {
            throw new Exception("Entity set '{$name}' not found in metadata.");
        }

        $entityType = $entitySet->getEntityType();
        $entityName = ucfirst($entityType->getName());

        $navProperties = $entityType->getNavigationProperties();
        $properties = $entityType->getProperties();

        if (empty($navProperties) && empty($properties)) {
            return false; // No properties to generate
        }

        // Determine namespace and class name
        $namespace = $this->buildNamespace($entityName);
        $className = 'Properties';

        // Check if file exists and we're not overwriting
        $outputFile = $this->buildOutputPath($entityName, $className . '.php');
        if (file_exists($outputFile) && !$overwrite) {
            return false;
        }

        // Build enum cases
        $enumCases = [];
        foreach ($properties as $name => $property) {
            $enumCases[] = "    case {$name};";
        }

        $enumCases[] = '';
        foreach ($navProperties as $name => $property) {
            $enumCases[] = "    case {$name};";
        }

        $enumContent = implode("\n", $enumCases);

        // Generate file content
        $content = <<<PHP
<?php
namespace {$namespace};

enum {$className}
{
{$enumContent}
}
PHP;

        $this->createOutputDir($entityName);
        return file_put_contents($outputFile, $content) !== false;
    }

    public function generateRecordFor(string $name, bool $overwrite = false): bool
    {
        $entitySet = $this->metadata->getEntitySet($name) ?? $this->metadata->getEntitySetFor($name);
        if (!$entitySet) {
            throw new Exception("Entity set '{$name}' not found in metadata.");
        }

        $entityType = $entitySet->getEntityType();
        $entityName = ucfirst($entityType->getName());

        // Determine namespace and class name
        $namespace = $this->buildNamespace($entityName);
        $className = 'Record';

        // Check if file exists and we're not overwriting
        $outputFile = $this->buildOutputPath($entityName, $className . '.php');
        if (file_exists($outputFile) && !$overwrite) {
            return false;
        }

        // Build imports
        $enumNamespace = $this->buildNamespace('Enums');
        $imports = ["use Rebel\\BCApi2\\Entity;"];
        $classMapEntries = [];

        $navProperties = $entityType->getNavigationProperties();
        foreach ($navProperties as $name => $navProperty) {
            $targetType = $navProperty->isCollection()
                ? substr($navProperty->getType(), 11, -1)
                : $navProperty->getType();

            $targetEntity = $this->metadata->getEntityType($targetType, true);
            if (!$targetEntity) {
                throw new Exception("Entity type '{$targetType}' not found in metadata.");
            }

            $targetEntityName = ucfirst($targetEntity->getName());
            $targetNamespace = $this->buildNamespace($targetEntityName);

            $imports[] = "use {$targetNamespace};";
            $classMapEntries[] = "            Properties::{$name}->name => {$targetEntityName}\\Record::class,";
        }

        $methods = [];
        if ($classMapEntries) {
            $classMapContent = implode("\n", $classMapEntries);
            $methods[] = $this->constructorMethod($classMapContent);
        }

        // Build property getters and setters
        $properties = $entityType->getProperties();
        foreach ($properties as $name => $property) {

            if (str_ends_with($name, 'Filter')) {
                continue;
            }

            $getterMethodName = 'get' . ucfirst($name);
            $setterMethodName = 'set' . ucfirst($name);
            if (str_starts_with($property->getType(), $this->metadata->getNamespace())) {
                $imports[] = "use $enumNamespace;";
                $phpType = $this->mapODataTypeToPhpType($property->getType());
                $methods[] = $this->getterMethodForEnum($getterMethodName, $name, $phpType);
                $methods[] = $this->setterMethodForEnum($setterMethodName, $name, $phpType);
            }
            elseif (str_ends_with($property->getType(), 'DateTimeOffset')) {
                $methods[] = $this->getterMethodForDateTime($getterMethodName, $name);
                $methods[] = $this->setterMethodForDateTime($setterMethodName, $name);
            }
            elseif (str_ends_with($property->getType(), 'Date')) {
                $methods[] = $this->getterMethodForDate($getterMethodName, $name);
                $methods[] = $this->setterMethodForDateTime($setterMethodName, $name);
            }
            else {
                $phpType = $this->mapODataTypeToPhpType($property->getType());
                $prefix = $phpType === 'bool' ? 'is' : 'get';
                $getterMethodName = $prefix . ucfirst($name);

                $methods[] = $this->getterMethodRegular($getterMethodName, $name, $phpType, $prefix);
                $methods[] = $this->setterMethodRegular($setterMethodName, $name, $phpType);
            }
        }

        // Build navigation property getters
        foreach ($navProperties as $name => $navProperty) {
            $targetType = $navProperty->isCollection()
                ? substr($navProperty->getType(), 11, -1)
                : $navProperty->getType();

            $targetEntity = $this->metadata->getEntityType($targetType, true);
            if (!$targetEntity) {
                throw new Exception("Entity type '{$targetType}' not found in metadata.");
            }

            $targetEntityName = ucfirst($targetEntity->getName());
            $getterMethodName = 'get' . ucfirst($name);
            $methods[] = $navProperty->isCollection()
                ? $this->getterMethodForCollection($getterMethodName, $name, $targetEntityName)
                : $this->getterMethodForEntityType($getterMethodName, $name, $targetEntityName);
        }

        $methodsContent = implode("\n\n", $methods);
        $importContent = implode("\n", array_unique($imports));

        // Generate file content
        $content = <<<PHP
<?php
namespace {$namespace};

{$importContent}

class Record extends Entity
{
{$methodsContent}
}
PHP;

        $this->createOutputDir($entityName);
        return file_put_contents($outputFile, $content) !== false;
    }

    private function constructorMethod(string $classMapContent): string
    {
        return <<<PHP
    public function __construct(array \$data = [], protected ?string \$context = null)
    {
        parent::__construct(\$data, \$context);

        \$this->classMap = [
{$classMapContent}
        ];
    }
PHP;
    }

    private function getterMethodForCollection(string $methodName, string $name, string $targetEntityName): string
    {
        return <<<PHP
    /**
     * @return Entity\Collection<{$targetEntityName}\Record>
     */
    public function {$methodName}(): Entity\Collection
    {
        return \$this->get(Properties::{$name}->name) ?? new Entity\Collection();
    }
PHP;
    }

    private function getterMethodForEntityType(string $methodName, string $name, string $targetEntityName): string
    {
        return <<<PHP
    public function {$methodName}(): ?{$targetEntityName}\Record
    {
        return \$this->get(Properties::{$name}->name);
    }
PHP;
    }

    private function setterMethodForDateTime(string $methodName, string $name): string
    {
        return <<<PHP
    public function {$methodName}(?\\DateTime \$value): self
    {
        \$this->set(Properties::{$name}->name, \$value);
        return \$this;
    }
PHP;
    }

    private function setterMethodRegular(string $methodName, string $name, string $phpType): string
    {
        return <<<PHP
    public function {$methodName}(?{$phpType} \$value): self
    {
        \$this->set(Properties::{$name}->name, \$value);
        return \$this;
    }
PHP;
    }

    private function setterMethodForEnum(string $methodName, string $name, string $phpType): string
    {
        return <<<PHP
    public function {$methodName}(?{$phpType} \$value): self
    {
        \$this->set(Properties::{$name}->name, \$value);
        return \$this;
    }
PHP;
    }

    private function getterMethodForDateTime(string $methodName, string $name): string
    {
        return <<<PHP
    public function {$methodName}(): ?\\DateTime
    {
        return \$this->getAsDateTime(Properties::{$name}->name);
    }
PHP;
    }

    private function getterMethodForDate(string $methodName, string $name): string
    {
        return <<<PHP
    public function {$methodName}(): ?\\DateTime
    {
        return \$this->getAsDate(Properties::{$name}->name);
    }
PHP;
    }

    private function getterMethodForEnum(string $methodName, string $name, string $phpType): string
    {
        return <<<PHP
    public function {$methodName}(): ?{$phpType}
    {
        return \$this->getAsEnum(Properties::{$name}->name, {$phpType}::class);
    }
PHP;
    }

    private function getterMethodRegular(string $methodName, string $name, string $phpType, string $prefix): string
    {
        return <<<PHP
    public function {$methodName}(): ?{$phpType}
    {
        return \$this->get(Properties::{$name}->name);
    }
PHP;
    }

    private function mapODataTypeToPhpType(string $odataType): string
    {
        // Handle collection types
        if (str_starts_with($odataType, 'Collection(')) {
            $odataType = substr($odataType, 11, -1);
            throw new Exception("Entity type '{$odataType}' is a collection.");
        }

        // Handle enum types
        if (str_starts_with($odataType, $this->metadata->getNamespace())) {
            $enumTypes = $this->metadata->getEnumTypes();
            $odataType = substr($odataType, strlen($this->metadata->getNamespace()) + 1);
            if (!in_array($odataType, $enumTypes)) {
                throw new Exception("Entity type '{$odataType}' is not a valid enum type.");
            }

            return 'Enums\\' . ucfirst($odataType);
        }

        $typeMap = [
            'Edm.String' => 'string',
            'Edm.Int32' => 'int',
            'Edm.Int64' => 'int',
            'Edm.Decimal' => 'float',
            'Edm.Double' => 'float',
            'Edm.Boolean' => 'bool',
            'Edm.Guid' => 'string',
            'Edm.Binary' => 'string',
            'Edm.Stream' => 'string',
        ];

        if (!isset($typeMap[ $odataType ])) {
            throw new Exception("Entity type '{$odataType}' cannot be mapped correctly.");
        }

        return $typeMap[ $odataType ];
    }
}