<?php

class Calculator 
{
    public $num1;
    public $num2;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function addition(): int 
    {
        $total = $this->num1 + $this->num2;
        return $total;
    }

    public function subtraction(): int 
    {
        $total = $this->num1 - $this->num2;
        return $total;
    }

    public function multiplication(): int 
    {
        $total = $this->num1 * $this->num2;
        return $total;
    }

    public function division(): float 
    {
        $total = $this->num1 / $this->num2;
        return $total;
    }
}