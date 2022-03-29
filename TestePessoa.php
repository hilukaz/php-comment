<?php
require_once("Pessoa.class.php");// texto: pessoa.class.php

$pessoa = new Pessoa();//orientando objeto
$pessoa->setNome("Lucas Hideo Kawakami");//atribuindo a variável Nome
echo $pessoa->getNome();//exibindo a variável

?>