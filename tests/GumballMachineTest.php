<?php

require 'vendor/autoload.php';

class GumballMachineTest extends PHPUnit\Framework\TestCase
{

    public function testTurnWheel()
    {
        $gumballMachineInstance= new GumballMachine;

        $gumballMachineInstance->setGumballs(100);
        $gumballMachineInstance->turnWheel();
        $this->assertEquals(99,$gumballMachineInstance->getGumballs());
        //$this->assertEquals(101,$gumballMachineInstance->getGumballs());
    }

    
}
