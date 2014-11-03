<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 11/3/14
 * Time: 11:46 AM
 */
class Room extends Dwelling
{
    private $name;
    private $area;
    private $price;

    function __construct($area, $price)
    {
        $this->name = 'room';
        $this->area = $area;
        $this->price = $price;
    }

    /**
     * @param float $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return float
     */
    public function getArea()
    {
        return $this->area;
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
}