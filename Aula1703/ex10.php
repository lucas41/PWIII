<?php 
 $chico = 1.50;
 $juca = 1.10;
 $anos = 0;

 while($juca < $chico){  
    $chico += 0.02;
    $juca += 0.03;
     $anos +=1;
 }
echo ("Demorou $anos anos para Juca ser maior que Chico!")
?>
