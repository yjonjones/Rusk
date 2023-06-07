<?php

$servername = "localhost";
$usuario = "root";
$senha_db = "";
$banco = "rusk";

$conexao = new mysqli($servername, $usuario, $senha_db, $banco);


if ($conexao->connect_error) {
    die("Desculpe, ocorreu um erro na conexão");
}