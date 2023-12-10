<?php
namespace App\Controller;

use App\Core\TextInput;
use App\Core\PasswordInput;
use App\Core\EmailInput;
use App\Core\FormGenerator;


class FormController {
    
    public function index(){
        $firstName = new TextInput(type:"text", id:"text", name:"firstName");
        $lastName = new TextInput(type:"text", id:"text", name:"lastName");
        $email = new EmailInput(type:"email", id:"text", name:"email");
        $password = new PasswordInput(type:"password", id:"text", name:"password");

        $form = new FormGenerator($firstName, $lastName, $email, $password);
        $inputs = $form->getInputs();

        require_once (__DIR__ . '/../views/forms.php');
    }

}
