<?php
session_start();

function setMensagem(string $mensagem): void {
    $_SESSION['mensagem'] = $mensagem;
}

function getMensagem(): ?string{
    if(isset($_SESSION['mensagem'])){
        return $_SESSION['mensagem'];
    }
    return null;
}

function removerMensagem():void{
    if(isset($_SESSION['mensagem'])){
        unset($_SESSION['mensagem']);
    }
}