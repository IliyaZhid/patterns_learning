<?php

namespace Prototype;

class InvoiceDocument extends Document
{
    public function __construct($name, $author, $content, \DateTime $date_created)
    {
        parent::__construct($name, 'Счет', $author, $content, $date_created);
    }
}
