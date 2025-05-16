<?php
class Sessao {
    public static function iniciar() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function encerrar() {
        session_start();
        session_destroy();
    }

    public static function validar() {
        self::iniciar();
        return isset($_SESSION['usuario']);
    }
}
?>
