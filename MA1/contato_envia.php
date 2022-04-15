<?php

include('sql.php');

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];



$sql = "INSERT INTO `colaboradores` (`nome`, `email`, `msg`) VALUES ('$nome', '$email', '$msg')";


if($nome == null || $email == null || $msg == null){
    $_SESSION['msg_error'] = 'Erro ao cadastrar feedback';
header("location: contato.php");

}
else if ($sql!=null) {
$inserir = mysqli_query($conexao, $sql); 
$_SESSION['msg_sucess'] = 'Feedback cadastrado com sucesso';
header("location: contato.php");
}





?>