<?php

namespace Behavioral\TemplateMethod\Reports;

class CustomerReport extends Report
{
    protected function collectData()
    {
        echo "Сбор данных о клиентах...\n";
    }

    protected function processData()
    {
        echo "Обработка данных клиентов...\n";
    }

    protected function formatReport()
    {
        echo "Форматирование отчета о клиенте...\n";
    }

    protected function outputReport()
    {
        echo "Вывод отчета о клиенте...\n";
    }
}
