<?php
include("../../config.php");

session_start();

$correo = (isset($_POST['email']))?$_POST['email']:"";

$clave = (isset($_POST['password']))?$_POST['password']:"";

$hash_clave = password_hash($clave,PASSWORD_DEFAULT);
$sentencia = $pdo->prepare("SELECT correo, clave from usuarios WHERE correo = :correo AND clave = :clave");
$sentencia -> bindParam (':correo',$correo);
$sentencia -> bindParam (':clave',$clave);
$sentencia -> execute();

$verificado=$sentencia ->fetch();
$password = $clave;
if ($verificado){
    $_SESSION['correo'] = $correo;
    header("location:../admin_artic/welcome.php");
} else{
    header("location: login.php");

}

?>