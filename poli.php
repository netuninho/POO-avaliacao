<?php

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';
include_once 'classes/ContaCorrente.clas.php';

$manu = new Pessoa(12, "Manuela Santos Silva", 1.48, 21, "12/09/2000", "Ensino Superior", 650.00);

echo "Manipulando o objeto {$manu->Nome}: <br>";

$conta_manu = new ContaCorrente (6677, "CC. 1234.56", "10/07/02", $manu, 9876, 567.89, 200.00);
$conta_manu = new ContaPoupanca(6677, "PP. 1234.56", "10/07/02", $manu, 9876, 567.89, 200.00);

foreach ($contas as $key -> $conta){
    echo "Manipulando a conta $key de: {$conta->Titular->Nome}: <br>";
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()} <br>";
    $conta->Depositar(200);
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()} <br>";
    $conta->Retirar(100);
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()} <br>";
}