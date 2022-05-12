<?php

abstract class produto {

    public $id;

    // classe abstrata gera o metodo pegarid que devera ser implementado obrigatoriamente na classe concreta
    abstract protected function pegarid();



    //metodo imprimir que usaria a função abstrata
    public function imprimir(){
        echo ($this->pegarid());
    }


}



?>