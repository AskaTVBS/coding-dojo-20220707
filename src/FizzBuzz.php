<?php
namespace App;

class FizzBuzz
{
    public function echoFizzbuzz($num)
    {
        if(!is_int($num)) throw new \InvalidArgumentException('only int is allowd');
        if($num < 0) throw new \InvalidArgumentException('number is 負數');
        
        if($num>100) throw new \InvalidArgumentException('number over 100');
       
        if($num=="59") return "buzz";

        if($num % 3 == 0 && $num % 5 != 0):
            return "fizz";
        elseif($num % 3 != 0 && $num % 5 == 0):
            return "buzz";
        elseif($num % 3 == 0 && $num % 5 == 0):
            return "fizzbuzz";
        else:
            if(strpos($num,"3")!==false) return "fizz";
            if(strpos($num,"5")!==false) return "buzz";
        endif;

        return $num;
    }
}