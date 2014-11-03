<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 11/3/14
 * Time: 11:45 AM
 */
class Flat extends Dwelling
{
    private $name;
    private $area;
    private $price;

    function __construct($area, $price)
    {
        $this->area = $area;
        $this->name = 'flat';
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}