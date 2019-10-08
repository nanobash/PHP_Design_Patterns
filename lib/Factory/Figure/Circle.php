<?php

declare(strict_types=1);

namespace ProjectX\Factory\Figure;

use ReflectionClass;
use ReflectionException;

class Circle implements FigureInterface
{
    protected $dimension;

    public function __construct(float $dimension)
    {
        $this->setDimension($dimension);
    }

    /**
     * @param float $dimension
     *
     * @return FigureInterface
     */
    public function setDimension(float $dimension): FigureInterface
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * @return float
     */
    public function getDimension(): float
    {
        return $this->dimension;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->dimension ** 2 * pi();
    }

    /**
     * @return string
     *
     * @throws ReflectionException
     */
    public function getFigureType(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }
}
