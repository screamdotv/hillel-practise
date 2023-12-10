<?php
namespace App\Models;

use App\Core\Validator;
use App\Core\Required;
use App\Core\MinLength;
use App\Core\Email;

class UserModel
{
    #[Required, MinLength]
    private mixed $firstName;

    #[Required, MinLength(2)]
    private mixed $lastName;

    #[Required, Email]
    private mixed $email;

    #[Required, MinLength(6)]
    private mixed $password;


    public function __construct($firstName, $lastName, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getFirstName() 
    {
        return ucfirst($this->firstName);
    }
    public function getLastName()
    {
        return ucfirst($this->lastName);
    }

    public function getEmail():string
    {
        return ucfirst($this->email);
    }
    
    public function getPassword():string
    {
        return $this->password;
    }

    public function validateAttributes() 
    {
        $validator = new Validator();

        // Передача массива имен свойств для обработки атрибутов
        $propertyNames = ['firstName', 'lastName', 'email', 'password']; 

        return $validator->requiredValues($this, $propertyNames);
    }
}