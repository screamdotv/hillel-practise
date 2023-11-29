<?php
namespace App\Controller;

use App\Core\TextInput;
use App\Core\PasswordInput;
use App\Models\FormGenerator;


class FormController {
    
    public function index(){
        $text = new TextInput(type:"text", id:"text", name:"name");
        $password = new PasswordInput(type:"password", id:"text", name:"password");

        $form = new FormGenerator($text, $password);
        $inputs = $form->getInputs();

        require_once (__DIR__ . '/../views/forms.php');
    }

}
