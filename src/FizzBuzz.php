<?php
namespace App;

class FizzBuzz
{
    public function echoFizzbuzz($num)
    {
        if(!is_int($num)) throw new \InvalidArgumentException('only int is allowd');
        if($num == "3") return "fizz";
        if($num == "5") return "buzz";

        return $num;
    }
}