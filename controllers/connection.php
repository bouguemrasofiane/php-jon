<?php

session_start();

$name = $_POST['name'];
$password = $_POST['password'];

$loginUser =  'sofiane';
$passwordUser = '1234';

if ($name == $loginUser && $password == $passwordUser) {
   $_SESSION['name'] = $name;
   $_SESSION['img'] = 1;
   $_SESSION['myname'] = 1;
   $_SESSION['guide'] = 1;
   header('Location: /');
   exit;
} else {
   $_SESSION['tow'] = $name;
   header('Location: /form.php');
   exit;
}
