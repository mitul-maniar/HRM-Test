<?php

session_start();
ob_start();
session_destroy();

unset($_SESSION['userid']);

header('Location:../index.php');

?>

