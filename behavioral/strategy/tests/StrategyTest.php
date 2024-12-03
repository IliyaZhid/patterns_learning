<?php

use PHPUnit\Framework\TestCase;
use Behavioral\Strategy\SortStrategies\BubbleSort;
use Behavioral\Strategy\SortStrategies\QuickSort;
use Behavioral\Strategy\SortStrategies\MergeSort;
use Behavioral\Strategy\Sorter;

class StrategyTest extends TestCase
{
    public function testBubbleSort()
    {
        $sorter = new Sorter();
        $sorter->setStrategy(new BubbleSort());

        $data = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
        $sortedData = $sorter->sort($data);

        $this->assertEquals([1, 1, 2, 3, 3, 4, 5, 5, 5, 6, 9], $sortedData);
    }

    public function testQuickSort()
    {
        $sorter = new Sorter();
        $sorter->setStrategy(new QuickSort());

        $data = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
        $sortedData = $sorter->sort($data);

        $this->assertEquals([1, 1, 2, 3, 3, 4, 5, 5, 5, 6, 9], $sortedData);
    }

    public function testMergeSort()
    {
        $sorter = new Sorter();
        $sorter->setStrategy(new MergeSort());

        $data = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
        $sortedData = $sorter->sort($data);

        $this->assertEquals([1, 1, 2, 3, 3, 4, 5, 5, 5, 6, 9], $sortedData);
    }
}
