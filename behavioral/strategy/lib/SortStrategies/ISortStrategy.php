<?php

namespace Behavioral\Strategy\SortStrategies;

interface ISortStrategy
{
    public function sort(array $data): array;
}
