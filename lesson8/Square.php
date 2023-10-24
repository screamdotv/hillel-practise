<?php
require_once 'Figure.php';

class Square extends Figure
{
    public function area(): int|float
    {
        $value = $this->height ** 2;
        
        return $value;
    }

    public function perimeter(): int|float
    {
        $value = $this->height * 4;
        
        return $value;
    }

}