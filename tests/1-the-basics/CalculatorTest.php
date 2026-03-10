<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 3);
        $this->assertEquals(5, $result);
    }
}