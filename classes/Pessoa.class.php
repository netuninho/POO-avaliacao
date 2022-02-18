<?php

class Pessoa{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    /* Método Crescer
        Aumenta a altura em centimetros
    */
    function Crescer($centimetros){
        if($centimetros > 0){
            $this -> Altura  += $centimetros;
        }
    }

    /* Método formar
        Altera a escolaridade para titulacao
    */
    function Formar($titulacao){
        $this -> Escolaridade = $titulacao;
    }

    /*Método envelhecer
    aumenta a idade em anos
    */
    function Envelhecer($anos){
        if($anos >0){
            $this -> Idade += $anos;
        }
    }

    /*Método construtos
    inicializa prorpiedades
    */

    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario){
        $this -> Codigo = $Codigo;
        $this -> Nome = $Nome;
        $this -> Altura = $Altura;
        $this -> Idade = $Idade;
        $this -> Nascimento = $Nascimento;
        $this -> Escolaridade = $Escolaridade;
        $this -> Salario = $Salario;

    }

    /*Método destrutor
    finaliza objeto
    */
    function __destruct()
    {
        echo "Objeto {$this->Nome} finalizado... <br>";
    }
        
}