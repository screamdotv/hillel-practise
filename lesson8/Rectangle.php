<?php
require_once 'Figure.php';

class Rectangle extends Figure
{
    public function area(): int|float
    {
        $value = $this->height * $this->width;
        
        return $value;
    }

    public function perimeter(): int|float
    {
        $value = 2 * ($this->height + $this->width);
        
        return $value;
    }

}