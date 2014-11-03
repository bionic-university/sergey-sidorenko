<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 10/29/14
 * Time: 1:09 PM
 */

spl_autoload_register(function ($class) {
        include 'src/' . $class . '.php';
    });

class Realtor implements showInterface, searchInterface
{
    function __construct()
    {
    }

    public function show($foundedCollection)
    {
        $cnt = count($foundedCollection);
        if ($cnt == 0) {
            echo 'there is no any variants :(' . PHP_EOL;
        } else {
            echo 'there is(are) such variant(s): ' . PHP_EOL;
        }
        for ($i = 0; $i < $cnt; ++$i) {
            $hs = $foundedCollection[$i];
            echo $hs->getPrice() . PHP_EOL;
        }
    }

    public function search($Collection, $area)
    {
        $foundedCollection = array();
        for ($i = 0; $i < count($Collection); ++$i) {
            $hs = $Collection[$i];
            if ($area == $hs->getArea()) {
                $foundedCollection[] = $hs;
            }
        }
        return $foundedCollection;
    }
} 