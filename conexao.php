<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

//cria a conexao com o banco

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
    die("Falha de conexao: " .mysqli_connect_error());
}
echo "<h1>Conexao bem sucedida</h1>";

?>