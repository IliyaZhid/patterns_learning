<?php

namespace Creational\Prototype;

interface IDocumentPrototype
{
    public function clone(): IDocumentPrototype;
}
