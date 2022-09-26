<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/login.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon/favicon.ico">
    <title>Write Anything - Login</title>
</head>
<body>
    <section class="titulo">
        <img src="../imagens/WriteAnythingLogo.png" class="image-logo" alt="Logo Write Anything Preto e Amarelo com um W no meio!">
    </section>
    <img src="../imagens/escrevendo.svg" class="image-login-left" alt="Imagem remetendo ao ato de escrever e publicar algo!">
    <div class="container">
        <div class="header">
            <h2>Logue em sua conta!</h2>
        </div>

        <form id="form" class="form" action="../metodos/login.metodo.php" method="POST">
            <section class="formulariolog">
                <div class="form-control">
                    <label for="username">Nome de usuário</label>
                    <input type="text" id="username" name="username" placeholder="Digite seu nome de usuário..." style="background-color: #1a1919; color: #fff;"/>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Digite seu email.." style="background-color: #1a1919; color: #fff;" />
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="form-control">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua senha..." style="background-color: #1a1919; color: #fff;" />
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small>Mensagem de erro</small>
                </div>
                
                <div class="link_cad">
                    <p>Não tem uma conta? <a href="cadastro.html"><strong>Cadastre-se!</strong></p></a>
                </div>

                <button type="submit">Enviar</button>
            </section>
        </form>
    </div>
</body>
</html>