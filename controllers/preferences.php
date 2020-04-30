<?php
session_start();

$displayImg = intval($_POST['image']);
$displayText = intval($_POST['myname']);
$displayText = intval($_POST['guide']);

$_SESSION['img'] = $displayImg ;
$_SESSION['myname'] = $displayText ;
$_SESSION['guide'] = $displayText ;
header('Location: /infos.php') ;
