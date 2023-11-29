<?php
namespace App\Controller;

use App\Models\UserModel;

class RegistrationController 
{
    public function newUser($name, $password) {

        $newUser = new UserModel($name, $password);
        
        $userName = $newUser->getName();
        $userPassword = $newUser->getPassword();

        require_once (__DIR__ . '/../views/user.php');
    }
          
}