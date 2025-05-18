<?php
use Rebel\BCApi2\Metadata;
use Rebel\BCApi2\Generator;

chdir(__DIR__ . '/../');
include_once 'vendor/autoload.php';

$filename = 'build/metadata.xml';
$metadata = Metadata\Factory::fromString(file_get_contents($filename));
$generator = new Generator($metadata);
$generator->generateAll(true);