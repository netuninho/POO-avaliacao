<?php

//insere a chave
include_once 'classes/Produto.class.php';

//cria dois objetos
$produto1 = new Produto;
$produto2 = new Produto;

//atribuir valores
$produto1 -> Codigo = 4001;
$produto1 -> Descricao = 'CD - The Best of Eric Clapton';

$produto2 -> COdigo = 4002;
$produto2 -> Descricao = 'CD - The Eahles Hotel California';

//imprime informações de etiqueta
$produto1 -> ImprimeEtiqueta();
$produto2 -> ImprimeEtiqueta();

