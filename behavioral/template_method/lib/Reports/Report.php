<?php

namespace Behavioral\TemplateMethod\Reports;

abstract class Report
{
    public function generateReport()
    {
        $this->collectData();
        $this->processData();
        $this->formatReport();
        $this->outputReport();
    }

    abstract protected function collectData();
    abstract protected function processData();
    abstract protected function formatReport();
    abstract protected function outputReport();
}
