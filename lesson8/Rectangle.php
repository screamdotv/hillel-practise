<?php
require_once 'Figure.php';

class Rectangle extends Figure
{
    public function area(): int|float
    {
        return $this->height * $this->width;
        
    }

    public function perimeter(): int|float
    {
        return 2 * ($this->height + $this->width);
    }

}