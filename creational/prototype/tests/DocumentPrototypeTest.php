<?php

use PHPUnit\Framework\TestCase;
use Prototype\InvoiceDocument;
use Prototype\ContractDocument;
use Prototype\ReportDocument;

class DocumentPrototypeTest extends TestCase
{
    public function testInvoiceDocumentClone()
    {
        $dateCreated = new \DateTime();
        $invoice = new InvoiceDocument('Счет на оплату', 'Иван Иванов', 'Счет на оплату за услуги', $dateCreated);
        $clonedInvoice = $invoice->clone();

        $this->assertNotSame($invoice, $clonedInvoice);
        $this->assertEquals($invoice->getName(), $clonedInvoice->getName());
        $this->assertEquals($invoice->getType(), $clonedInvoice->getType());
        $this->assertEquals($invoice->getAuthor(), $clonedInvoice->getAuthor());
        $this->assertEquals($invoice->getContent(), $clonedInvoice->getContent());
        $this->assertEquals($invoice->getDateCreated(), $clonedInvoice->getDateCreated());
    }

    public function testContractDocumentClone()
    {
        $dateCreated = new \DateTime();
        $contract = new ContractDocument('Договор о сотрудничестве', 'Петр Петров', 'Договор о сотрудничестве с компанией', $dateCreated);
        $clonedContract = $contract->clone();

        $this->assertNotSame($contract, $clonedContract);
        $this->assertEquals($contract->getName(), $clonedContract->getName());
        $this->assertEquals($contract->getType(), $clonedContract->getType());
        $this->assertEquals($contract->getAuthor(), $clonedContract->getAuthor());
        $this->assertEquals($contract->getContent(), $clonedContract->getContent());
        $this->assertEquals($contract->getDateCreated(), $clonedContract->getDateCreated());
    }

    public function testReportDocumentClone()
    {
        $dateCreated = new \DateTime();
        $report = new ReportDocument('Отчет о продажах', 'Анна Сидорова', 'Отчет о продажах за квартал', $dateCreated);
        $clonedReport = $report->clone();

        $this->assertNotSame($report, $clonedReport);
        $this->assertEquals($report->getName(), $clonedReport->getName());
        $this->assertEquals($report->getType(), $clonedReport->getType());
        $this->assertEquals($report->getAuthor(), $clonedReport->getAuthor());
        $this->assertEquals($report->getContent(), $clonedReport->getContent());
        $this->assertEquals($report->getDateCreated(), $clonedReport->getDateCreated());
    }
}
