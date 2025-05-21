<?php
namespace Rebel\BCApi2\Entity\Enums;

enum GenJournalDocumentType: string
{
    case Null = '_x0020_';
    case Payment = 'Payment';
    case Invoice = 'Invoice';
    case CreditMemo = 'Credit_x0020_Memo';
    case FinanceChargeMemo = 'Finance_x0020_Charge_x0020_Memo';
    case Reminder = 'Reminder';
    case Refund = 'Refund';
}
