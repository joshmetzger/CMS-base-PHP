<?php session_start(); ?>

<?php

//cancel ALL sessions fpr logout

$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['user_role'] = null;

header("Location: ../index.php");

?>