<?php

session_start();

include_once("porta.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO account (nome, telefone, email, mensagem, criado) VALUES ('$nome','$telefone','$email','$mensagem', NOW() )";

$resultado_usuario = mysqli_query ($conexao, $result_usuario);


if (mysqli_insert_id($conexao)){

    $_SESSION['msg'] = "<p style ='color: white'>Sua mensagem foi enviada com sucesso!</p>";
    header("Location: index.php");
 
} else {
    $_SESSION['msg'] = "<p style ='color: red'>Erro ao enviar/p>";
    header("Location: index.php");

}



    

   



?>