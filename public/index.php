<?php
require_once 'vendor/autoload.php';

use App\Homework1\Rectangle;
use App\Homework1\Square;

try {
    $rect = new Rectangle(20, 10);
    echo 'Area rectangle: ' . $rect->getArea() . PHP_EOL;
    echo 'Perimeter rectangle: ' . $rect->getPerimeter() . PHP_EOL;

    $square = new Square(30);
    echo 'Area square: ' . $square->getArea() . PHP_EOL;
    echo 'Perimeter square: ' . $square->getPerimeter() . PHP_EOL;
} catch (Exception $e) {
  echo "Ooops! Error: " . $e->getMessage() . PHP_EOL;
}
