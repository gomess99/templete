<?php

//AQUI SERÁ CONECTADO O BANCO DE DADOS AO SITE

$servidor = 'localhost'; //NOME DO SERVIDOR
$usuario = 'root'; //NOME DO USUÁRIO
$senha = ''; //NÃO É NECESSÁRIO
$banco = 'landing'; //NOME DO BANCO

$auau = new mysqli($servidor, $usuario, $senha, $banco);


?>