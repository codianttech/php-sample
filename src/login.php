<?php
require_once '../model/User.php';

$model = new User();

if (!empty($_POST['email'])) {
    $user = $model->login($_POST); 
}
?>