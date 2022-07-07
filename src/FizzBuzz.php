<?php
namespace App;

class FizzBuzz
{
    public function echoFizzbuzz($num)
    {
        if(!is_int($num)) return "";
        if($num == "3") return "fizz";
        if($num == "5") return "buzz";

        return $num;
    }
}



