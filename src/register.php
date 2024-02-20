<?php
require_once __DIR__.'/../model/User.php';

$model = new User();

if (!empty($_POST['email'])) {
    $isEmailExist = $model->checkEmailExist($_POST['email']);
    if ($isEmailExist) {
        errorResponse("Email already exists.");
    }

    $isPhoneNumberExist = $model->checkPhoneNumberExist($_POST['phone_number']);
    if ($isPhoneNumberExist) {
        errorResponse("Phone number already exists.");
    }

    $model->register($_POST);
}
?>