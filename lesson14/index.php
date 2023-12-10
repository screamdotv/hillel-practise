<?php
require_once 'vendor/autoload.php';

use App\Controller\FormController;
use App\Controller\RegistrationController;

if (empty($_POST['firstName'])) {
    $form = new FormController();
    $form->index();
} else {
    $welcome = new RegistrationController();
    $welcome->newUser($_POST['firstName'], $_POST['lastName'], $_POST['email'],$_POST['password']);
}

