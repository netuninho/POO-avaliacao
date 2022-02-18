<?php

class ContaPoupanca extends Conta{
    public $Aniversario;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario){
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this -> Aniversario = $Aniversario;
    }

    function Retirar ($quantia){
        if($this->Slado >= $quantia){
            parent::Retirar($quantia);
        } else {
            echo "Retirada não permitida... <br>";
            return false;
        }
        return true;
    }
}