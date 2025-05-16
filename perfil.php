<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';

Sessao::iniciar();

if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $usuario->exibirPerfil();
    echo '<br><a href="logout.php">Sair</a>';
} else {
    echo "Usuário não está logado.";
}
?>
<script>
// Salva preferências no localStorage
localStorage.setItem("idioma", "<?php echo $usuario->idioma ?? ''; ?>");
localStorage.setItem("tema", "<?php echo $usuario->tema ?? ''; ?>");
</script>
