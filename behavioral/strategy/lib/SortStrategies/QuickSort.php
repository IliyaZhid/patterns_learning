<?php

namespace Behavioral\Strategy\SortStrategies;

class QuickSort implements ISortStrategy
{

    public function sort(array $data): array
    {
        if (count($data) < 2) {
            return $data;
        }

        $left = $right = array();
        $pivot = array_shift($data);

        foreach ($data as $value) {
            if ($value < $pivot) {
                $left[] = $value;
            } else {
                $right[] = $value;
            }
        }

        return array_merge($this->sort($left), array($pivot), $this->sort($right));
    }
}
