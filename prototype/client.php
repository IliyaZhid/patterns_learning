<?php


require_once __DIR__ . '/vendor/autoload.php';

use Prototype\InvoiceDocument;
use Prototype\ContractDocument;
use Prototype\ReportDocument;

// Создаем оригинальные документы
$invoice = new InvoiceDocument('Счет на оплату', 'Иван Иванов', 'Счет на оплату за услуги', new \DateTime());
$contract = new ContractDocument('Договор о сотрудничестве', 'Петр Петров', 'Договор о сотрудничестве с компанией', new \DateTime());
$report = new ReportDocument('Отчет о продажах', 'Анна Сидорова', 'Отчет о продажах за квартал', new \DateTime());

// Клонируем документы
$clonedInvoice = $invoice->clone();
$clonedContract = $contract->clone();
$clonedReport = $report->clone();

// Выводим оригинальные и клонированные документы
echo "Оригинальный документ:\n";
echo $invoice;
echo "\nКлонированный документ:\n";
echo $clonedInvoice;

echo "\nОригинальный документ:\n";
echo $contract;
echo "\nКлонированный документ:\n";
echo $clonedContract;

echo "\nОригинальный документ:\n";
echo $report;
echo "\nКлонированный документ:\n";
echo $clonedReport;
