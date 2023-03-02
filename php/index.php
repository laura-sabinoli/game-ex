<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Login - Games EX</title>
</head>
<?php
?>
<style>
    body {
        background: linear-gradient(45deg, #26df5d, #2712e7);
        background-repeat: no-repeat;
        min-height: 100vh;
        min-width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <section>
        <p>Games EX</p>
        <br>
        <br>
        <div class="container">
            <div class="login">
                <form method="post" action="valida_user.php" name="formulario" id="formulario"
                    enctype="multipart/form-data">
                    <h1>Login</h1>
                    <div class="field">
                        <div class="input-field">
                            <label>E-mail:</label>
                            <input type="email" name="email" id="email" placeholder="Digite seu e-mail"
                                onblur="validacaoEmail(formulario.email);">
                            <div class="underline"></div>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Senha:</label>
                            <input type="password" name="senha" placeholder="Digite sua senha">
                            <div class="underline"></div>
                        </div>
                        <button class='enviar' type="submit" name="enviar" id="enviar" volue="">ENTRAR</button>
                        <div class="containerBnt"
                            style="    margin-top: 0,1rem; padding: 0.4rem; background: white; border-radius: 8px; align-items: center; justify-content: center; display: flex; color:black;">
                            <a target="_blank" href='../php/criarConts.php'>CRIAR CONTA</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="../javascript.js">
</script>

</html>