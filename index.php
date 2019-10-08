<?php

declare(strict_types=1);

use ProjectX\Pattern\QuadrangleFactory;

require_once __DIR__ . "/vendor/autoload.php";

try {
    $square = QuadrangleFactory::getFigure("square");
    $circle = QuadrangleFactory::getFigure("circle");

    for ($i = 1; $i < 10; ++$i) {
        printf(
            "The area of the %s figure with the dimension of %d is %f",
            $square->getFigureType(),
            $square->setDimension($i)->getDimension(),
            $square->getArea()
        );

        echo PHP_EOL;

        printf(
            "The area of the %s figure with the dimension of %d is %f",
            $circle->getFigureType(),
            $circle->setDimension($i)->getDimension(),
            $circle->getArea()
        );

        echo PHP_EOL, PHP_EOL;
    }
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo PHP_EOL;
