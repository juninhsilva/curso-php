<?php
include 'services/mensagem.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição de Bikers - MTB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="mt-4">Inscrição de Bikers</h2>
        </div>
        <div>
            <form class="form" action="./script.php" method="post">
            <?php 
                $mensagem = getMensagem();
                if(!empty($mensagem)){
                    echo($mensagem);
                }
            ?>
                <div class="form-group row">
                    <label class="form-control-lg col-2" for="nome">Nome do Biker</label>
                    <input class="form-control-lg col-10" type="text" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group row">
                    <label class="form-control-lg col-2" for="idade">Idade</label>
                    <input class="form-control-lg col-10" type="number" id="idade" name="idade" placeholder="Idade"></div>
                <div class="form-group row">
                    <input class="form-control-lg btn btn-primary btn-block btn-lg" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>