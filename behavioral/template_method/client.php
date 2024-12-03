<?php
require_once __DIR__ . '/vendor/autoload.php';

use Behavioral\TemplateMethod\Reports\SalesReport;
use Behavioral\TemplateMethod\Reports\CustomerReport;

$salesReport = new SalesReport();
$salesReport->generateReport();

$customerReport = new CustomerReport();
$customerReport->generateReport();
