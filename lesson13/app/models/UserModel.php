<?php
namespace App\Models;

class UserModel
{
    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function getUser():string
    {
        return "Hello {$this->name}, your password {$this->password}";
    }
    
}