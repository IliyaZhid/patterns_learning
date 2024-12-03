<?php

namespace Behavioral\Strategy\SortStrategies;

class MergeSort implements ISortStrategy
{

    public function sort(array $data): array
    {
        if (count($data) <= 1) {
            return $data;
        }

        $mid = (int)(count($data) / 2);
        $left = array_slice($data, 0, $mid);
        $right = array_slice($data, $mid);

        $left = $this->sort($left);
        $right = $this->sort($right);

        return $this->merge($left, $right);
    }

    private function merge(array $left, array $right): array
    {
        $result = array();

        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        while (count($left) > 0) {
            $result[] = array_shift($left);
        }

        while (count($right) > 0) {
            $result[] = array_shift($right);
        }

        return $result;
    }

}
