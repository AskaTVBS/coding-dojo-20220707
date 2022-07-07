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
    public function testFizzbuzzForFizz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("fizz", $t->echoFizzbuzz(3));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForBuzz()
    {
        $t = new FizzBuzz();
        $this->assertEquals("buzz", $t->echoFizzbuzz(5));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $t = new FizzBuzz();
        $t->echoFizzbuzz(1.1);
    }

} 
                                 