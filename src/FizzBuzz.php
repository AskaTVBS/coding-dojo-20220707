<?php
namespace App;
class FizzBuzz
{
    public $isFizz = false;
    public $isBuzz = false;
    public $isWhizz = false;
    public $fizz = 'fizz';
    public $buzz = 'buzz';
    public $whizz = 'whizz';
    public function __construct($translator = null) {
        if(!empty($translator)) {
            $this->fizz = $translator->main($this->fizz);
            $this->buzz = $translator->main($this->buzz);
            $this->whizz = $translator->main($this->whizz);
        }
    }

    public function echoFizzbuzz($num)
    {
        if(!is_int($num)) throw new \InvalidArgumentException('only int is allowd');
        if($num < 0) throw new \InvalidArgumentException('number is 負數');
        if($num>100) throw new \InvalidArgumentException('number over 100');

        $returnStr = '';

        $this->isFizz = false;
        $this->isBuzz = false;
        $this->isWhizz = false;

        $checkFizzBuzzWhizz = $this->checkFizzBuzzWhizz($num);
        
        $checkFizzBuzzWhizzStr = $this->checkFizzBuzzWhizzStr($num);

        if(!$this->isFizz && !$this->isBuzz && !$this->isWhizz ){return $num;}
        if($this->isFizz == true) $returnStr .= $this->fizz;
        if($this->isBuzz == true) $returnStr .= $this->buzz;
        if($this->isWhizz == true) $returnStr .= $this->whizz;

        return $returnStr;
    }

    public function checkFizzBuzzWhizz($num = '')
    {
        if ($num % 3 == 0) { $this->isFizz = true;}
        if ($num % 5 == 0) { $this->isBuzz = true;}
        if ($num % 7 == 0) { $this->isWhizz = true;}
    }

    public function checkFizzBuzzWhizzStr($num = '')
    {
        if(strpos($num,"3")!==false){ $this->isFizz = true;}
        if(strpos($num,"5")!==false){ $this->isBuzz = true;}
        if(strpos($num,"7")!==false){ $this->isWhizz = true;}
    }

    public function getString() {
        $url = '';
        $this->fizz = $this->outputString();
        
    }

    public function outputString() {
        return json_encode([0 => '三陽開泰']);
    }


}