<?php
namespace App;

class FizzBuzz
{
    public function echoFizzbuzz($num)
    {
        if(!is_int($num)) throw new \InvalidArgumentException('only int is allowd');
        if($num < 0) throw new \InvalidArgumentException('number is 負數');
        if($num>100) throw new \InvalidArgumentException('number over 100');

        $isFizz = false;
        $isBuzz = false;
        $isWhizz = false;
        $return_str = $num;
        $fizzStr = "fizz";
        $buzzStr = "buzz";
        $whizzStr = "whizz";

        if ($num % 3 == 0) { $isFizz = true;}
        if ($num % 5 == 0) { $isBuzz = true;}
        if ($num % 7 == 0) { $isWhizz = true;}

        if(strpos($num,"3")!==false){ $isFizz = true;}
        if(strpos($num,"5")!==false){ $isBuzz = true;}
        if(strpos($num,"7")!==false){ $isWhizz = true;}
        
        if($isFizz == true) $return_str = "fizz";
        if($isBuzz == true) $return_str = "buzz";
        if($isWhizz == true) $return_str = "whizz";
        if($isFizz == true && $isBuzz == true) $return_str = "fizzbuzz";
        if($isFizz == true && $isBuzz == true && $isWhizz == true) $return_str = "fizzbuzzwhizz";
        // $data1 = "the color is";
        // $data2 = "red";
        // $result = $data1 . ' ' . $data2;
        return $return_str;
    }
}