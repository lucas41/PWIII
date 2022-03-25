<?php

session_start();

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$ra = $_POST['ra'];
$curso = $_POST['curso'];
$ma1 = $_POST['ma1'];
$mb1 = $_POST['mb1'];
$p1 = $_POST['p1'];
$ma2 = $_POST['ma2'];
$mb2 = $_POST['mb2'];
$p2 = $_POST['p2'];
$bonus = $_POST['bonus'];
$presenca = $_POST['presenca'];

$A1 = (($ma1 * 0.20) + ($mb1 * 0.10) + ($p1 * 0.70));
$A2 = (($ma2 * 0.20) + ($mb2 * 0.10) + ($p2 * 0.70));

$media = (($A1 + 2*$A2) /3);


if($ma1 > 10 || $ma1 < 0){
    $_SESSION['msg'] = 'A nota MA1 deve estar entre 0 e 10';
    header("location: ex1.php");

}

if($mb1 > 10 || $mb1 < 0){
    $_SESSION['msg'] = 'A nota MB1 deve estar entre 0 e 10';
    header("location: ex1.php");

}

if($p1 > 10 || $p1 < 0){
    $_SESSION['msg'] = 'A nota P1 deve estar entre 0 e 10 BURRO';
    header("location: ex1.php");

}

if($ma2 > 10 || $ma2 < 0){
    $_SESSION['msg'] = 'A nota MA2 deve estar entre 0 e 10';
    header("location: ex1.php");

}

if($mb2 > 10 || $mb2 < 0){
    $_SESSION['msg'] = 'A nota MB2 deve estar entre 0 e 10';
    header("location: ex1.php");

}

if($p2 > 10 || $p2 < 0){
    $_SESSION['msg'] = 'A nota P2 deve estar entre 0 e 10';
    header("location: ex1.php");

}

$situacao = "";

if ($bonus == "sim" && $media <= 9.5){
    $media = $media + 0.5;
}





if($media >= 5 && $presenca > 75){
    $situacao = "aprovado";
} 
if ($media > 3 && $media < 5 && $presenca > 75){
    $situacao = "regime especial";
} 
if ($presenca < 75){
    $situacao = "reprovado por falta";
}



?>

<h1> Dados do aluno </h1>

<b>Nome: </b> <?php echo htmlentities($nome) ?> <br>
<b>Curso: </b>  <?php echo $curso ?> <br>
<b>média: </b>  <?php echo $media ?> <br>
<b>Presença: </b>   <?php echo $presenca ?> <br>
<b>Situação: </b>   <?php echo $situacao ?> <br>