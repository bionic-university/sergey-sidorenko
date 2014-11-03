<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 11/3/14
 * Time: 11:44 AM
 */
class House extends Dwelling
{
    private $name;
    private $area;
    private $price;

    public function __construct($area, $price)
    {
        $this->area;
        $this->name = 'house';
        $this->price;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $square
     */
    public function setArea($square)
    {
        $this->area = $square;
    }

    /**
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }

}