<?php
    session_start();
    $categorias = ['Infantil', 'Juvenil','Adulto', 'Sênior'];
    // print_r($categorias);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome) || empty($idade)){
        $_SESSION['erro'] = 'Nome ou idade não podem ser vazios';
        header('location:index.php');
    }

    if(strlen($nome) < 3){
        $_SESSION['erro'] =  'Nome muito pequeno';
        header('location:index.php');
    }

    if(str_word_count($nome) < 2){
        $_SESSION['erro'] = 'Informe também o seu sobrenome';
        header('location:index.php');
    }

    if(strlen($nome) > 100){
        echo 'Nome muito grande';
        return;
    }

    if(is_numeric($idade)){
        if($idade<=12){
            echo($categorias[0]);
        }else if($idade >=13 && $idade <=18){
            echo($categorias[1]);
        }else if($idade >= 19 && $idade <=45){
            echo($categorias[2]);
        }else{
            echo($categorias[3]);
        }
    }

    //mostra o tipo da variável
    // var_dump($nome);
?>