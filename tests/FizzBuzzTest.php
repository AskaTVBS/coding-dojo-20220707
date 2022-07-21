<?php

namespace App\Tests;

use App\FizzBuzz;
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
        $this->assertEquals("fizz", $t->echoFizzbuzz(32));
    }

            /** @coversNothing
     */
    public function testFizzbuzzInthas5()
    {
        $t = new FizzBuzz();
        $this->assertEquals("buzz", $t->echoFizzbuzz(59));
        //$this->assertEquals("fizzbuzz", $t->echoFizzbuzz(35));
        //$this->assertEquals("buzz", $t->echoFizzbuzz(65));
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
                                  