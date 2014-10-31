<?php

/**
 * Created by PhpStorm.
 * User: php
 * Date: 10/29/14
 * Time: 1:23 PM
 */
abstract class Dwelling
{
    abstract public function getArea();

    abstract public function getPrice();

    abstract public function getName();
}


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
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $square
     */
    public function setArea($square)
    {
        $this->area = $square;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

}

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
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
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
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
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