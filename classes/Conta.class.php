<?php

class Conta{
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    /*Método retirar
    Diminui o saldo em quantia
    */
    function Retirar($quantia){
        if($quantia > 0){
            $this -> Saldo -= $quantia;
        }
    }

    /*Método Depositar
    aumenta o saldo em quantia
    */
    function Depositar($quantia){
        if($quantia > 0){
            $this -> Saldo += $quantia;
        }
    }

    /*Método ObterSlado
    retorna o saldo atual
    */
    function ObterSaldo(){
        return $this -> Saldo;
    }

    /*Método construtor
    inicializa propriedades
    */
    function __construct($Agencia, $Codigo, $DataDeCracao, $Titular, $Senha){
        $this -> Agencia = $Agencia;
        $this -> Codigo = $Codigo;
        $this -> DataDeCriacao = $DataDeCracao;
        $this -> Titular = $Titular;
        $this -> Senha = $Senha;

        //chamada a outro método da classe
        $this->Depositar(500);
        $this -> Cancelada = false;

        /*Método destrutor
        finaliza objeto
        */
    }
        function __destruct(){
            echo "Objeto Conta {$this->Codigo} de {$this->Titular} finalizada... <br>";
        }

}