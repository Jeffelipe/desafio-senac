<?php
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';

Sessao::iniciar();

if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    if ($usuario->verificarSenha($_POST['senha']) && $usuario->email == $_POST['email']) {
        header("Location: perfil.php");
    } else {
        echo "Email ou senha incorretos.";
    }
} else {
    echo "Usuário não registrado. Faça o cadastro primeiro.";
}
?>
