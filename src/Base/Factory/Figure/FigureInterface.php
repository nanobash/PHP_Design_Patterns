<?php

declare(strict_types=1);

namespace ProjectX\Base\Factory\Figure;

interface FigureInterface
{
    /**
     * Sets the dimension to an object.
     *
     * @param float $dimension
     *
     * @return $this
     */
    public function setDimension(float $dimension): self;

    /**
     * Returns the dimension of an object.
     *
     * @return float
     */
    public function getDimension(): float;

    /**
     * Returns area of an object.
     *
     * @return float
     */
    public function getArea(): float;

    /**
     * Returns the type of an object.
     *
     * @return string
     */
    public function getFigureType(): string;
}
