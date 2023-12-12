<?php 
session_start();

$_SESSION = array();
session_destroy();
header('location:../user_artic/principalUser.php');
exit();


?>