<?php
require_once 'Figure.php';

class Square extends Figure
{
    public function area(): int|float
    {
        return $this->height ** 2;
    }

    public function perimeter(): int|float
    {
        return $this->height * 4;
    }

}