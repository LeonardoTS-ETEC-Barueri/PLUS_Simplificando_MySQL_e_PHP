<?php

// Configurações de acesso/conexão do banco de Dados.

$dbHost = '127.0.0.1';
$dbUser = 'root';
$dbSenha = '';
$dbBanco = 'db_testes_php';

$conn = mysqli_connect($dbHost, $dbUser, $dbSenha, $dbBanco);

$sql = "SET NAMES 'utf8'";
mysqli_query($conn, $sql);
$sql = "SET character_set_connection=utf8";
mysqli_query($conn, $sql);
$sql = "SET character_set_client=utf8";
mysqli_query($conn, $sql);
$sql = "SET character_set_results=utf8";
mysqli_query($conn, $sql);

if (mysqli_connect_error()){
    echo ("Erro na conexão:" . mysqli_connect_error());
    exit();
}

?>