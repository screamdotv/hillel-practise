<?php
require_once 'Figure.php';

class Circle extends Figure
{
    public function area(): int|float
    {
        $value = pi() * ($this->height / 2) ** 2;
        
        return $value;
    }

    public function perimeter(): int|float
    {
        $value = 2 * pi() * ($this->height / 2);
        
        return $value;
    }
}