<?php

namespace Creational\Prototype;

class ReportDocument extends Document
{
    public function __construct($name, $author, $content, \DateTime $date_created)
    {
        parent::__construct($name, 'Отчет', $author, $content, $date_created);
    }
}
