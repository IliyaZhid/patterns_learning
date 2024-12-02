<?php

namespace Prototype;

interface IDocumentPrototype
{
    public function clone(): IDocumentPrototype;
}
