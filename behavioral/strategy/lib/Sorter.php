<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\SortStrategies\ISortStrategy;

class Sorter
{
    private $strategy;

    public function setStrategy(ISortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sort(array $data): array
    {
        if (!$this->strategy) {
            throw new \Exception("Стратегия не указана");
        }

        return $this->strategy->sort($data);
    }
}
