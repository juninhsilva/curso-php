<?php
include "services/validacao.php";
    // print_r($categorias);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    validaNome($nome);
    validaIdade($nome, $idade);

    header('location: index.php');


    //mostra o tipo da variável
    // var_dump($nome);
?>