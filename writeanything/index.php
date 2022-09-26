<?php

session_start();

require_once('metodos/verification.php');

verification('paginas/login.php')

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon.ico">
    <title>Write Anything - Início</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Escreva o que quiser!!</h2>
        </div>

        <form class="form-central" action="final.php" method="POST">
            <section class="formulario-texto">
                <div class="form-control">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" placeholder="Digite um título..." style="background-color: #1a1919; color: #fff;"/>
                </div>

                <div class="form-control">
                    <label for="texto">Escreva o seu texto</label><br>
                    <textarea name="texto_usuario" rows="10" cols="40" maxlength="500" placeholder="Escreva o seu texto aqui..." style="background-color: #1a1919; color: #fff;"></textarea>
                </div>

                <div class="form-control">
                    <label for="assinatura">Assinatura</label>
                    <input type="text" name="assinatura" placeholder="Digite sua assinatura..." style="background-color: #1a1919; color: #fff;" />
                </div>

                <button type="submit">Enviar</button>
                    <br><br>
            </section>
        </form>
        <a href="metodos/logout.php">
            <button>Sair</button>
        </a>
    </div>
</body>
</html>