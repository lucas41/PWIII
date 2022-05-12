<?php

include_once('abstractClass.php');

class estoque extends produto {


    public $quantidade;

    // implmentamos pegarid e retornamos o valor do id 
  protected function pegarid() // precisamos implementar obrigatoriamente o metodo pegarid por ser herdado de uma classe abstrata
  {
      return($this->id);
  }



}
