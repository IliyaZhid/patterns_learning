<?php

namespace Creational\Prototype;

class ContractDocument extends Document
{
    public function __construct($name, $author, $content, \DateTime $date_created)
    {
        parent::__construct($name, 'Договор', $author, $content, $date_created);
    }
}
