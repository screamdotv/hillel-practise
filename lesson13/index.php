<?php
require_once 'vendor/autoload.php';

use App\Controller\FormController;
use App\Controller\RegistrationController;

if (empty($_POST['name'])) {
    $form = new FormController();
    $form->index();
} else {
    $welcome = new RegistrationController();
    
    echo $welcome->newUser($_POST['name'], $_POST['password']);
}

