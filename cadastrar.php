<?php
include('conexao.php');

$email = $_POST ["email"];
$usuario = $_POST ["usuario"];
$senha = $_POST ["senha"];
$CPF = $_POST ["CPF"];
$nacimento = $_POST ["nacimento"];
$celular = $_POST ["celular"];

echo "<h3>E-mail: $email</h3>";
echo "<h3>Nome do Usuario: $usuario</h3>";
echo "<h3>Senha: $senha</h3>";
echo "<h3>CPF: $CPF</h3>";
echo "<h3>Data de Nacimento: $nacimento</h3>";
echo "<h3>Celular: $celular</h3>";

$cadastro = "INSERT INTO allyfer (email, usuario, senha, CPF, nacimento, celular) VALUES ('$email','$usuario','$senha','$CPF','$nacimento','$celular')";

if(mysqli_query($conn, $cadastro)){

    echo "<h1>Novo cadastro realizado</h1></br>";
} else {
    echo "<h1> Erro: " . $cadastro . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>