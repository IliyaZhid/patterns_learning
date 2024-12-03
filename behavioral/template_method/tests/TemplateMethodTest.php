<?php

use PHPUnit\Framework\TestCase;
use Behavioral\TemplateMethod\Reports\SalesReport;
use Behavioral\TemplateMethod\Reports\CustomerReport;

class TemplateMethodTest extends TestCase
{
    public function testSalesReport()
    {
        $salesReport = new SalesReport();
        $salesReport->generateReport();

        $this->expectOutputString(
            "Сбор данных о продажах...\n" .
            "Обработка данных о продажах...\n" .
            "Форматирование отчета о продажах...\n" .
            "Вывод отчета о продажах...\n"
        );
    }

    public function testCustomerReport()
    {
        $customerReport = new CustomerReport();
        $customerReport->generateReport();

        $this->expectOutputString(
            "Сбор данных о клиентах...\n" .
            "Обработка данных клиентов...\n" .
            "Форматирование отчета о клиенте...\n" .
            "Вывод отчета о клиенте...\n"
        );
    }

}
