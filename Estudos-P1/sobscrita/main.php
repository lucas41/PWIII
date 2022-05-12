<?php

// Sobscrita de metodo e quando possuimos uma mesma function com mesma assinatura na classe pai e na classe filho a qual ira herdar os metodos de pai

include_once('filhoClass.php');
include_once('paiClass.php');

$filho = new Filho();
$filho->teste();

?>