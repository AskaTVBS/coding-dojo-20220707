<?php

namespace App\Tests;

use App\FizzBuzz;
use App\ITranslator;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;


/**
 * TestFizzBuzz
 * @group AskaTest
 * @coversDefaultClass \App\FizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    /** @coversNothing
     */
    public function testFizzbuzzInt()
    {
        $t = new FizzBuzz();
        $this->assertEquals("1", $t->echoFizzbuzz(1));
        $this->assertEquals("2", $t->echoFizzbuzz(2));
        $this->assertEquals("4", $t->echoFizzbuzz(4));
    }

        /** @coversNothing
     */
    public function testFizzbuzzInthas3()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizz", $t->echoFizzbuzz(13));
        $this->assertEquals("fizz", $t->echoFizzbuzz(23));
    }

    /** @coversNothing
     */
    public function test多國語系三的feedback()
    {
        // 幫我建立一個假的翻譯機，然後我等一下會定義一下"main"這個function的行為
        $translator = $this->getMockBuilder(ITranslator::class)
            ->onlyMethods(["main"])
            ->disableOriginalConstructor()
            ->getMock();
        // 定義main function的行為為: 會被呼叫任意次數(any), 當被呼叫時，參數與回傳值的對應，如我提供的array所述
        $translator->expects($this->any())
            ->method("main")
            ->will($this->returnValueMap(array(
                array("fizz", "三陽開泰"),
                array("buzz", "五福臨門"),
                array("whizz", "七星報喜")
            )));

        // 把假物件注入FizzBuzz
        $t = new FizzBuzz($translator);
        $this->assertEquals("三陽開泰", $t->echoFizzbuzz(13));
        $this->assertEquals("三陽開泰", $t->echoFizzbuzz(23));
    }


            /** @coversNothing
     */
    public function testFizzbuzzInthas5()
    {
        $t = new FizzBuzz();
        $this->assertEquals("buzz", $t->echoFizzbuzz(59));
        $this->assertEquals("fizzbuzz", $t->echoFizzbuzz(51));
        $this->assertEquals("fizzbuzz", $t->echoFizzbuzz(54));
        $this->assertEquals("buzz", $t->echoFizzbuzz(52));
        $this->assertEquals("buzz", $t->echoFizzbuzz(65));
    }

    /** @coversNothing
     */
    public function test多國語系五的feedback()
    {
        $translator = new FakeChineseTranslator();
        $t = new FizzBuzz($translator);
        $this->assertEquals("五福臨門", $t->echoFizzbuzz(59));
    }

                /** @coversNothing
     */
    public function testFizzbuzzInthas7()
    {
        $t = new FizzBuzz();
        $this->assertEquals("whizz", $t->echoFizzbuzz(7));
        $this->assertEquals("whizz", $t->echoFizzbuzz(14));
        $this->assertEquals("whizz", $t->echoFizzbuzz(28));
    }

    /** @coversNothing
     */
    public function test多國語系七的feedback()
    {
        $translator = new FakeChineseTranslator();
        $t = new FizzBuzz($translator);
        $this->assertEquals("七星報喜", $t->echoFizzbuzz(7));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForFizz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizz", $t->echoFizzbuzz(3));
        $this->assertEquals("fizz", $t->echoFizzbuzz(6));
        $this->assertEquals("fizz", $t->echoFizzbuzz(99));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForBuzz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("buzz", $t->echoFizzbuzz(5));
        $this->assertEquals("buzz", $t->echoFizzbuzz(100));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForFizzBuzz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizzbuzz", $t->echoFizzbuzz(15));
        $this->assertEquals("fizzbuzz", $t->echoFizzbuzz(90));
    }


    /** @coversNothing
     */
    public function testFizzbuzzForWhizz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("whizz", $t->echoFizzbuzz(71));
        $this->assertEquals("whizz", $t->echoFizzbuzz(74));
    }

      /** @coversNothing
     */
    public function testFizzbuzzForFizzWhizz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizzwhizz", $t->echoFizzbuzz(72));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForFizzBuzzWhizz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizzbuzzwhizz", $t->echoFizzbuzz(35));
        $this->assertEquals("fizzbuzzwhizz", $t->echoFizzbuzz(57));
        $this->assertEquals("fizzbuzzwhizz", $t->echoFizzbuzz(75));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(1.1);
    }

    /** @coversNothing
     */
    public function testOverFizzbuzz()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(10000);
    }

    /** @coversNothing
     */
    public function testOverFizzbuzz2()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(100000);
    }

    /** @coversNothing
     */
    public function testOverFizzbuzz3()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(101);
    }

        /** @coversNothing
     */
    public function testFizzbuzzFor負數()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(-1);
    }

    /** @coversNothing
     */
    public function testFizzbuzzFor負數2()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(-3);
    }

    /** @coversNothing
     */
    public function testFizzbuzzFor負數3()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(-150);
    }



} 
                                            