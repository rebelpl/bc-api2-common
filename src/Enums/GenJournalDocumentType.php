<?php
namespace Rebel\BCApi2\Entity\Enums;

class GenJournalDocumentType
{
    public const Null = '_x0020_';
    public const Payment = 'Payment';
    public const Invoice = 'Invoice';
    public const CreditMemo = 'Credit_x0020_Memo';
    public const FinanceChargeMemo = 'Finance_x0020_Charge_x0020_Memo';
    public const Reminder = 'Reminder';
    public const Refund = 'Refund';
}
