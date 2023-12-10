<?php
namespace App\Core;
use Attribute;

#[Attribute]
class Email
{
    public function email($value){
        if(empty(trim($value)) && !(filter_var($value, FILTER_VALIDATE_EMAIL))) {
            return false;
        } else {
            return $value;
        }
    }

}