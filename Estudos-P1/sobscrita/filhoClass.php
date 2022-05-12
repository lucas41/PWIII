<?php

include_once('paiClass.php');

class Filho extends pai { // a classe extende pai
    public function teste(){ // a classe filho tem uma function com o mesmo nome da pai
        echo(parent::teste()); // usamos parent::nome da função de pai para acessar o metodo anterior e sobscrever ele adicionando novos conteudos
        echo("Método teste da classe filha chamado!");
    }
}

?>