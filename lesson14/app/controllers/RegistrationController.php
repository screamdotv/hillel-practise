<?php
namespace App\Controller;

use App\Controller\FormController;
use App\Models\UserModel;

class RegistrationController 
{
    public function newUser($firstName, $lastName, $email, $password) {

        $newUser = new UserModel($firstName, $lastName, $email, $password);
        $validate = $newUser->validateAttributes();
        var_dump($validate);
        if (empty($validate)) {
            $userName = $newUser->getFirstName();
            $userPassword = $newUser->getPassword();
            require_once (__DIR__ . '/../views/user.php');
        } else {
            foreach ($validate as $v){
                echo $v;
            }
            $form = new FormController();
            $form->index();
            require_once (__DIR__ . '/../views/forms.php');
        }
    }
          
}