<?php

class Calculator 
{
    public function __construct(
        public int|float $num1, 
        public int|float $num2,
    ){}

    public function addition() : int|float
    {
        $total = $this->num1 + $this->num2;
        return $total;
    }

    public function subtraction() : int|float
    {
        $total = $this->num1 - $this->num2;
        return $total;
    }

    public function multiplication() : int|float
    {
        $total = $this->num1 * $this->num2;
        return $total;
    }

    public function division() : int|float|string
    {
        if($this->num2 == 0) {
            $total = "На ноль делить нельзя!";
        } else {
            $total = $this->num1 / $this->num2;
        }

        return $total;
    }
}