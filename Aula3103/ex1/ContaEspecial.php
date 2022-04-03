<?php
    class ContaEspecial extends Conta{
        public function Bonus($saldos){
            $this->saldo += $saldos * 0.5;
        }
    }
?>