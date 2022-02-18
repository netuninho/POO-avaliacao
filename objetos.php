<?php

# Carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

#Criação do objeto $manu
$manu = new Pessoa(12, "Manuela Santos Silva", 1.48, 21,"12/09/2000", "Ensino Superior", 700.00);
/*$manu -> Codigo = 12;
$manu -> Nome = "Manuela Santos Silva";
$manu -> Altura = 1.48;
$manu -> Idade = 21;
$manu -> Nascimento = '12/09/2000';
$manu -> Escolaridade = "Ensino Superior";*/

echo "Manipulando o objeto {$manu -> Nome} : <br>";

echo "{$manu->Nome} possui {$manu->Idade} anos <br>";
$manu -> Envelhecer(1);
echo "{$manu->Nome} possui {$manu->Idade} anos <br>";

# Criação do objeto $conta_manu
$conta_manu = new Conta(6666,"CC.1234.56",$manu,1903,340.55,false );
/*$conta_manu -> Agencia = 6666;
$conta_manu -> Codigo = "CC.1234.56";
$conta_manu -> DataDeCriacao = "14/10/2018";
$conta_manu -> Titular = $manu;
$conta_manu -> Senha = 1903;
$conta_manu -> Saldo = 340.55;
$conta_manu -> Cancelada = false;
*/

echo "Manipulando a conta de: {$manu -> Nome} <br>";
echo "O saldo atual é R$ {$conta_manu -> ObterSaldo()} <br>";

$conta_manu -> Depositar(20);
echo "O saldo atual é R$ {$conta_manu->ObterSaldo()} <br>";

$conta_manu -> Retirar(10);
echo "O saldo atual é R$ {$conta_manu->ObterSaldo()} <br>";