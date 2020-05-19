<?php
    $categorias = ['Infantil', 'Juvenil','Adulto', 'Sênior'];
    print_r($categorias);
    $nome = 'Juninh Silva';
    $idade = 30;
    //mostra o tipo da variável
    var_dump($nome);

    if($idade<=12){
        echo($categorias[0]);

    }else if($idade >=13 && $idade <=18){
        echo($categorias[1]);
    }else if($idade >= 19 && $idade <=45){
        echo($categorias[2]);
    }else{
        echo($categorias[3]);
    }
?>