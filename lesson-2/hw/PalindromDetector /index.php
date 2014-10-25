<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 10/16/14
 * Time: 11:05 AM
 */
require_once('PalindromeDet.php');

function isFileOpen($i_file)
{
    if (!$i_file) {
        throw new Exception('File is not open!' . PHP_EOL);
    }
}

function isArgument($i_argc)
{
    if ($i_argc < 2) {
        throw new Exception("Argument is not set! \n Please, type string or file" . PHP_EOL);
    }
}

try {
    isArgument($argc);
} catch (Exception $exc) {
    echo 'Exception is caught: ', $exc->getMessage(), "\n";
    die();
}

$str = "";

if (preg_match('/txt$/', $argv[1])) {

    if (!file_exists("$argv[1]")) {
        die("File is not found!\n");
    } else {
        try {
            $file = fopen("$argv[1]", "rt");
            isFileOpen($file);
        } catch (Exception $e) {
            echo 'Exception is caught: ', $e->getMessage(), "\n";
            die();
        }
        while (!feof($file)) {
            $tmp = fgets($file, 100);
            $str = $str . $tmp;
        }
        fclose($file);
        $str = trim($str);
    }
} else {
    $str = $argv[1];
}

$rt = new PalindromeDet($str);
echo "\" $str \"" . ' is palindrome: ' . $rt->isPalindrome() == 1 ? 'true' : 'false' . PHP_EOL;