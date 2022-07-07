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

    public $t = new FizzBuzz();

    /** @coversNothing
     */
    public function testFizzbuzzInt()
    {
        $this->assertEquals("1", $this->t->echoFizzbuzz(1));
        $this->assertEquals("2", $this->t->echoFizzbuzz(2));
        $this->assertEquals("4", $this->t->echoFizzbuzz(4));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForFizz()
    {
        $this->assertEquals("fizz", $this->t->echoFizzbuzz(3));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForBuzz()
    {
        $this->assertEquals("buzz", $this->t->echoFizzbuzz(5));
    }

    /** @coversNothing
     */
    public function testFizzbuzzForException()
    {
        $this->assertEquals("", $this->t->echoFizzbuzz(1.1));
    }

} 
                       