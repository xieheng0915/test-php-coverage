<?php

class GumballMachine 
{
    private $gumballs;

    public function getGumballs(){
        return $this->gumballs;
    }

    public function setGumballs($value){
        $this->gumballs = $value;
    }

    public function turnWheel(){
        $this->setGumballs($this->getGumballs() - 1);
    }
}