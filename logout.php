<?php
require_once 'classes/Sessao.php';
Sessao::encerrar();
header("Location: login.html");
exit();
?>
