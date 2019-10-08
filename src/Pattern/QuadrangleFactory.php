<?php

declare(strict_types=1);

namespace ProjectX\Pattern;

use Exception;
use ProjectX\Base\Factory\Figure\Circle;
use ProjectX\Base\Factory\Figure\FigureInterface;
use ProjectX\Base\Factory\Figure\Square;

class QuadrangleFactory implements QuadrangleFactoryInterface
{
    /**
     * @param string $figure
     * @param float $dimension
     *
     * @return FigureInterface
     *
     * @throws Exception
     */
    public static function getFigure(string $figure, float $dimension = 0): FigureInterface
    {
        switch ($figure) {
            case "square":
                return new Square($dimension);
                break;
            case "circle":
                return new Circle($dimension);
                break;
            default:
                throw new Exception(sprintf("The %s figure is not supported", $figure));
                break;
        }
    }
}
