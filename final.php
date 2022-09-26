<?php

session_start();

require_once('metodos/verification.php');

verification('paginas/login.php');

$titulo = $_POST['titulo'];
$texto_usuario = $_POST['texto_usuario'];
$assinatura = $_POST['assinatura'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/final.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon.ico">
    <title>Write Anything - Resultado Final</title>
</head>
<body>
    <section class="container">
        <div class="header">
            <h2>Resultado final!!</h2><img src="imagens/WriteAnythingLogo.png" class="image-logo" alt="Logo Write Anything Preto e Amarelo com um W no meio!">
        </div>
        <article class="texto-final">
            <p style="text-align:initial;">Título: <?php echo $titulo; ?></p>
            <br><br>
            <p style="text-align:center;"><?php echo $texto_usuario; ?></p>
            <br><br>
            <p style="text-align:end;">Assinatura: <?php echo $assinatura; ?></p>
            <br><br>
        </article>
        <br>
        <a href="metodos/logout.php">
            <button>Sair</button>
        </a>
    </section>
</body>
</html>