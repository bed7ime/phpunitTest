<?php
include "Calculator.php";

use PHPUnit\Framework\Testcase;

class CalcTest extends
Testcase
{
    private $calculate;
    public function setUp(): void
    {
        $this->calculate = new Calculator();
    }

    public function testAdd1()
    {
        @$this->assertequals(4, $this->calculate->add(3, 1));
        @$this->assertequals(3, $this->calculate->add(2, 1));
        @$this->assertequals(5, $this->calculate->add(4, 1));
    }
    public function testMultiply1()
    {
        @$this->assertequals(3, $this->calculate->multiply(3, 1));
        @$this->assertequals(2, $this->calculate->multiply(2, 1));
        @$this->assertequals(4, $this->calculate->multiply(4, 1));
    }
    public function testSubstract1()
    {
        @$this->assertequals(4, $this->calculate->substract(5, 1));
        @$this->assertequals(3, $this->calculate->substract(4, 1));
        @$this->assertequals(5, $this->calculate->substract(6, 1));
    }
    public function testDivide()
    {
        @$this->assertequals(3, $this->calculate->divide(6, 2));
        @$this->assertequals(4, $this->calculate->divide(8, 2));
        @$this->assertequals(5, $this->calculate->divide(10, 2));
    }
}
