<?php

class UtilDao
{

    private static function IniciarSessao()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public static function CriarSessao($cod, $nome)
    {
        self::IniciarSessao();

        $_SESSION['cod'] = $cod;
        $_SESSION['nome'] = $nome;
    }

    public static function CodigoLogado()
    {
        self::IniciarSessao();
        return $_SESSION['cod'];
    }

    public static function NomeLogado()
    {
        self::IniciarSessao();
        return $_SESSION['nome'];
    }

    public static function Deslogar()
    {
        self::IniciarSessao();
        unset($_SESSION['cod']);
        unset($_SESSION['nome']);

        header('location: login.php');
        exit;
    }

    public static function VerificarLogado()
    {
        self::IniciarSessao();
        if (!isset($_SESSION['cod']) || $_SESSION['cod'] == '') {

            header('location: login.php');
            exit;
        }
    }

    private static function SetarFusoHorario()
    {
        date_default_timezone_set('America/Sao_Paulo');
    }

    private static function DataAtual()
    {
        self::SetarFusoHorario();
        $data_atual = date('Y-m-d');
        return $data_atual;
    }

    private static function DataAtualExibir()
    {
        self::SetarFusoHorario();
        $data_atual = date('d/m/Y');
        return $data_atual;
    }

    private static function HoraAtual()
    {
        self::SetarFusoHorario();
        $hora_atual = date('H:i');
        return $hora_atual;
    }

    private static function DataHoraAtual()
    {
        self::SetarFusoHorario();
        $hora_atual = date('Y-m-d H:i');
        return $hora_atual;
    }
}
