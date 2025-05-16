<?php
class Usuario {
    private $nome;
    private $email;
    private $senha;
    private $idioma;
    private $tema;

    public function __construct($nome, $email, $senha, $idioma, $tema) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->idioma = $idioma;
        $this->tema = $tema;
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }

    public function atualizarPreferencias($idioma, $tema) {
        $this->idioma = $idioma;
        $this->tema = $tema;
    }

    public function exibirPerfil() {
        echo "<h2>Perfil do Usuário</h2>";
        echo "Nome: {$this->nome}<br>";
        echo "Email: {$this->email}<br>";
        echo "Idioma: {$this->idioma}<br>";
        echo "Tema: {$this->tema}<br>";
    }
}
?>
