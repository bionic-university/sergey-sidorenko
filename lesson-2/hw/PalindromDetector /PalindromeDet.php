<?php

class PalindromeDet
{

    private $palindromeStr;

    function __construct($palindromeStr)
    {
        $this->setPalindromeStr($palindromeStr);
    }

    /**
     * @param mixed $palindromeStr
     */
    public function setPalindromeStr($palindromeStr)
    {
        $this->palindromeStr = $palindromeStr;
    }

    /**
     * @return mixed
     */
    public function getPalindromeStr()
    {
        return $this->palindromeStr;
    }

    public function isPalindrome()
    {
        $bufStr = strtolower($this->palindromeStr);
        $bufStr = preg_replace("/[^a-z0-9]/", "", $bufStr);
        return $bufStr === strrev($bufStr);
    }
}
