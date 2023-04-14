<?php

define('DB_DRIVE', 'mysql');
define('NOME_SERVIDOR', 'localhost');
define('NOME_BANCO', 'hipocrates');
define('USUARIO', 'root');
define('SENHA', '');

class Conexao
{
    public static function conectar()
    {
        $conexao = new PDO("mysql:host=localhost;dbname=hipocrates", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}
