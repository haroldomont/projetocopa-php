<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usu = "INSERT INTO perfil(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usu = mysqli_query($conn ,$result_usu);