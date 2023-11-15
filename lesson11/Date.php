<?php

class Date 
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct($day, $month, $year)
    {
        if (is_int($day) && is_int($month) && is_int($year)){
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        } else {
            echo "Значения должны быть числом";
            die;
        }
    }
    
    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getFormatYourDate()
    {
        return $this->day . "-" . $this->month . "-" . $this->year;
    }

    public function comparison()
    {   
        
        if ($this->getFormatYourDate() > date('d-m-Y')){
            return "Ваша дата " . $this->getFormatYourDate() . " больше текушей " . date('d-m-Y') . "<br>";
        } else {
            return "Ваша дата " . $this->getFormatYourDate() . " меньше текушей " . date('d-m-Y') . "<br>";
        }
    }

    public function difference()
    {   
        if(($this->day - date('d') < 0) || ($this->month - date('m') < 0) || ($this->year - date('Y') < 0)){
            return "Ваша дата {$this->getFormatYourDate()} меньше от текущей на " . date('d') - $this->day . " дней " . date('m') - $this->month . " месяцев "  . date('Y') - $this->year . " лет.<br>";
        }
    }
}
