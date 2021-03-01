<?php
require 'vendor/autoload.php';
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->calculator = new Calculator;
    }
    public function inputNumbers()
    {
        return [
            [2,2,4],
            [2.5,2.5,5],
            [-3,1,-2],
            [-9,-9,-18]
        ];
    }
    /**
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($x,$y,$sum)
    {
        
        $this->assertEquals($sum, $this->calculator->add($x,$y));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionIfNonNumbericIsPassed()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator;
        $calc->add('a','b');
        
    }
}