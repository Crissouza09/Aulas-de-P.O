<?php
    require "usuario.php";

    //$aluno = new Usuario();
    //$aluno -> nome = "Maria";
    //$aluno -> idade = 18;
    //$aluno -> email = "maria@ig.com.br";

    //$aluno2 = new Usuario();
    //$aluno2 -> nome = "Joaquim";
    //$aluno2 -> idade = 30;
    //$aluno2 -> email = "joaquim@icq.com.br";

    //var_dump($aluno);
    //echo "<br>";
    //var_dump($aluno2);

    $aluno = new Usuario();
    $aluno -> setNome("Maria");
    $aluno -> setIdade(18);
    $aluno -> setEmail("maria@ig.com.br");

    $aluno2 = new Usuario();
    $aluno2 -> setNome("Joaquim");
    $aluno2 -> setIdade(30);
    $aluno2 -> setEmail("joaquim@icq.com.br");

    echo "<p>Nome: {$aluno->getNome()} </p>";
    echo "<p>Idade: {$aluno->getIdade()} </p>";
    echo "<p>Email: {$aluno->getEmail()} </p>";
    echo "<br>";
    echo "<p>Nome: {$aluno2->getNome()} </p>";
    echo "<p>Idade: {$aluno2->getIdade()} </p>";
    echo "<p>Email: {$aluno2->getEmail()} </p>";

    $aluno3 = new usuario();
    $aluno3->setNome ("Epaminondas");
    $aluno3->setIdade  (17);
    $aluno3 ->setEmail  ("epaminandas#gfg.com.br");

   $aluno4 = new usuario("alice", 22);
    echo "<br>";
    var_dump($aluno4);
 
 

?>