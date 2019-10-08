<?php

declare(strict_types=1);

use ProjectX\Command\FigureCommand;
use Symfony\Component\Console\Application;

require_once __DIR__ . "/vendor/autoload.php";

try {
    $console = new Application();

    $console->add(new FigureCommand());

    $console->run();
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}
