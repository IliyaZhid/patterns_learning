<?php
require_once __DIR__ . '/vendor/autoload.php';

use Behavioral\Strategy\SortStrategies\BubbleSort;
use Behavioral\Strategy\SortStrategies\QuickSort;
use Behavioral\Strategy\SortStrategies\MergeSort;
use Behavioral\Strategy\Sorter;

$sorter = new Sorter();

$data = range(0, 10);
shuffle($data);
$data = array_slice($data, 0, 10);

echo "Исходный массив: " . implode(", ", $data) . PHP_EOL;

$sorter->setStrategy(new BubbleSort());
try {
    $sortedData = $sorter->sort($data);
    echo "Bubble Sort: " . implode(", ", $sortedData) . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage();
}

$sorter->setStrategy(new QuickSort());
try {
    $sortedData = $sorter->sort($data);
    echo "Quick Sort: " . implode(", ", $sortedData) . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage();
}

try {
    $sorter->setStrategy(new MergeSort());
    $sortedData = $sorter->sort($data);
    echo "Merge Sort: " . implode(", ", $sortedData) . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage();
}

