<?php

use InvalidArgumentException;

class Calculator
{
    
    public function add($firstnumber, $secondnumber)
    {
        if( !is_numeric($firstnumber) || !is_numeric($secondnumber)){
            throw new \InvalidArgumentException;
        }

        return $firstnumber + $secondnumber;
    }
}