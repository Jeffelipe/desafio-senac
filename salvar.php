<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'classes/Usuario.php';

$usuario = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['idioma'], $_POST['tema']);
$_SESSION['usuario'] = serialize($usuario);

header("Location: perfil.php");
exit();
?>
