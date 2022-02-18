<?php

include_once 'classes/Conta.class.php';
include_once 'classes/Pessoa.class.php';

$manu = new Pessoa(12, "Manuela Santos Silva", 1.48, 21, "12/09/2000", "Ensino Superior", 650.00);

echo "Manipulando o objeto {$manu->Nome}: <br>";

echo "{$manu->Nome} é formado em: {$manu->Escolaridade} <br>";
$manu->Formar('Técnico em Eletricidade');
echo "{$manu->Nome} é formado em: {$manu->Escolaridade} <br>";
echo "{$manu->Nome} possui {$manu->Idade} anos <br>";
$manu->Envelhecer(1);
echo "{$manu->Nome} possui {$manu->Idade} anos <br>";

# Criação do objeto $conta_manu
$conta_manu = new Conta(6677, "CC. 1234.56", "10/07/02", $manu, 9876, 567.89);
echo "<br>";
echo "Manipulando a conta de: {$conta_manu->Titular->Nome}: <br>";
echo "O saldo atual é R$ {$conta_manu->ObterSaldo()} <br>";

$conta_manu->Depositar(20);
echo "O saldo atual é R$ {$conta_manu->ObterSaldo()} <br>";

$conta_manu->Retirar(10);
echo "0 saldo atual é R$ {$conta_manu->ObterSaldo ()} <br>";
