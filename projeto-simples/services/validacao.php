<?php
include "mensagem.php";
function validaNome(string $nome): bool{
    if(empty($nome)){
        setMensagem('Nome não pode ficar em branco');
        return false;
    }

    else if(strlen($nome) < 3){
        setMensagem('Nome muito pequeno');
        return false;
    }

    else if(str_word_count($nome) < 2){
        setMensagem('Informe também o seu sobrenome');
        return false;
    }

    else if(strlen($nome) > 100){
        setMensagem('Nome muito grande');
        return false;
    }
    return true;
}

function validaIdade(string $nome, string $idade): bool{
    $categoria;
    $categorias = ['Infantil', 'Juvenil','Adulto', 'Sênior'];
    if(is_numeric($idade)){
        if($idade<=12){
            $categoria = $categorias[0];
        }else if($idade >=13 && $idade <=18){
            $categoria = $categorias[1];
        }else if($idade >= 19 && $idade <=45){
            $categoria = $categorias[2];
        }else{
            $categoria = $categorias[3];
        }

        setMensagem("Atleta cadastrado com sucesso!\nNome: ".$nome." - Categoria: ".$categoria);
        return true;
    }

    setMensagem('A idade deve ser numérica');
    return false;
}