<?php

declare(strict_types=1);

namespace ProjectX\Pattern;

use ProjectX\Factory\Figure\FigureInterface;

interface QuadrangleFactoryInterface
{
    /**
     * Returns figure object.
     *
     * @param string $figure
     * @param float $dimension
     *
     * @return FigureInterface
     */
    public static function getFigure(string $figure, float $dimension): FigureInterface;
}
