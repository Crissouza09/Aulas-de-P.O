<?php

//importando as classes
require_once "conta.php";
require_once "Administrador.php";

//criando uma instancia da classe conta
$conta = new Conta(1, "patati@patata.com", "2345678");
echo $conta->login("2345678") ? "login realizado 
com sucesso \n" :" Senha incorreta \n";

?>