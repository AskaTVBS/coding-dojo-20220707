<?php

namespace App\Tests;
use App\ITranslator;




/**
 * FakeChineseTranslator
 * @group AskaTest
 * @coversDefaultClass \App\FizzBuzz
 */
    class FakeChineseTranslator implements ITranslator
    {
        public function main($term)
        {
            if($term=="fizz") return "三陽開泰";
            if($term=="buzz") return "五福臨門";
            if($term=="whizz") return "七星報喜";
        }
       
    }
?>
