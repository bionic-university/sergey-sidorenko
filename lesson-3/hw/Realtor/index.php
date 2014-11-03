<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 10/29/14
 * Time: 1:10 PM
 */

spl_autoload_register(
    function ($class) {
        include 'src/' . $class . '.php';
    }
);

/**
 * @param float $line
 * @throws Exception
 */
function isCorrect($line)
{
    if (preg_match('/[a-zA-Z]/', $line)) {
        throw new Exception("Argument is not a number! \n Please, type number" . PHP_EOL);
    }
    $line = intval($line);
    if ($line == '0') {
        throw new Exception("Argument is null! \n Please, type correct number" . PHP_EOL);
    }
    if ($line < '15' || $line > '150') {
        throw new Exception("Argument is out of range (less than 15 or more than 150 sqm)! Please, type correct number" . PHP_EOL);
    }
}

$realtor = new Realtor();
$housesQuantity = rand(5, 15);
$flatsQuantity = rand(5, 15);
$roomsQuantity = rand(5, 15);
$housesCollection = array();
$flatsCollection = array();
$roomsCollection = array();

for ($i = 0; $i < $housesQuantity; ++$i) {
    $houseArea = rand(50, 150);
    $housePrice = rand(50, 100) * 10000;
    $housesCollection[] = new House($houseArea, $housePrice);
}

for ($j = 0; $j < $flatsQuantity; ++$j) {
    $flatArea = rand(25, 50);
    $flatPrice = rand(25, 50) * 10000;
    $flatsCollection[] = new Flat($flatArea, $flatPrice);
}

for ($k = 0; $k < $roomsQuantity; ++$k) {
    $roomArea = rand(15, 25);
    $roomPrice = rand(15, 25) * 10000;
    $roomsCollection[] = new Room($roomArea, $roomPrice);
}
do {
    echo 'Please, enter area: ';
    $line = fgets(STDIN);
    try {
        isCorrect($line);
    } catch (Exception $e) {
        echo 'Exception is caught: ', $e->getMessage(), '\n';
        exit;
    }
    echo PHP_EOL . 'Houses:' . PHP_EOL;
    $fndCln = $realtor->search($housesCollection, $line);
    $realtor->show($fndCln);
    echo 'Flats:' . PHP_EOL;
    $fndCln = $realtor->search($flatsCollection, $line);
    $realtor->show($fndCln);
    echo 'Rooms:' . PHP_EOL;
    $fndCln = $realtor->search($roomsCollection, $line);
    $realtor->show($fndCln);
    echo 'Do you want to choose once more?(yes=1/no=0)' . PHP_EOL;
    $flag = fgets(STDIN);
} while ($flag == 1);