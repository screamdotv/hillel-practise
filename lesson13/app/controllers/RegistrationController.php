<?php
namespace App\Controller;

use App\Models\UserModel;

class RegistrationController 
{
    public function newUser($name, $password) {

        $newUser = new UserModel($name, $password);
        
        return $newUser->getUser();
    }
          
}