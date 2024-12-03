<?php

namespace Behavioral\TemplateMethod\Reports;

class SalesReport extends Report
{
    protected function collectData()
    {
        echo "Сбор данных о продажах...\n";
    }

    protected function processData()
    {
        echo "Обработка данных о продажах...\n";
    }

    protected function formatReport()
    {
        echo "Форматирование отчета о продажах...\n";
    }

    protected function outputReport()
    {
        echo "Вывод отчета о продажах...\n";
    }
}
