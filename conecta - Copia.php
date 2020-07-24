<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "biblioteca";

    $conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if ($conexao -> connect_error) {
        echo "Erro De Conexão!: (".$conexao -> connect_error.")" .$conexao -> connect_error;
    } else {
        //echo "CONECTADO!";
    }
?>