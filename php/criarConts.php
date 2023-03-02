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
        <div class="container">
            <?php
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if (isset($dados) && !in_array("", $dados)) {
                unset($dados['cadastro']);
                if (file_exists("usuario.json")) {
                    $arq = file_get_contents("usuario.json");
                    $arq = json_decode($arq, true);
                    array_push($arq, $dados);
                    $vlr_json = json_encode($arq);
                    if (file_put_contents("usuario.json", $vlr_json)) {
                        echo "<div style='color:rgb(30, 255, 0);'>Cadastro realizado com sucesso!</div>";
                       header("Refresh: 3, url=../php/index.php");
                    } else {
                        echo "<div style='color:white;'>Não foi possível cadastrar o usuario!</div>";
                        header("Refresh: 3, url=../php/index.php");
                    }

                } else {
                    $arq = array(0 => $dados);
                    $arq = json_encode($arq);
                    if (file_put_contents("usuario.json", $arq)) {
                        echo "<div style='color:rgb(30, 255, 0);'>Cadastro realizado com sucesso!</div>";
                        header("Refresh: 3, url=../php/index.php");
                    } else {
                        echo "<div style='color:white;'>Não foi possível cadastrar o usuario!</div>";
                       header("Refresh: 3, url=../php/index.php");
                    }
                }
            }
            ?>
            <form method="post" action="" name="formulario" id="formulario" enctype="multipart/form-data">
                <h1>Criar Conta</h1>
                <div class="field">
                    <div class="input-field">
                        <label>Nome:</label>
                        <input type="text" name="nomeCad"  pattern="([aA-zZ]+)" placeholder="Digite seu Nome" required>
                        <div class="underline"></div>
                    </div>
                    <br>
                    <div class="input-field">
                        <label>Data de Nascimento</label>
                        <input name="data" type="text" id="data" placeholder="Digite seu data de nascimento"
                            onKeyPress="formata_data(this,document.formulario.data);return Apenas_Numeros(event);"
                            maxlength="10" required>
                        <div class="underline"></div>
                    </div>
                    <br>
                    <div class="input-field">
                        <label>E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" onblur="validacaoEmail(formulario.email);" required>
                        <div class="underline"></div>
                    </div>
                    <br>
                    <div class="input-field">
                        <label>Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                        <div class="underline"></div>
                    </div>
                    <br>
                    <input type="submit" name="Cadastro" id="Cadastro" volue="Cadastrar" style="margin-top: 1rem; padding: 0.4rem;width: 100%; background: linear-gradient(to right, #26df5d, #2712e7); color: white; cursor: pointer;font-size: 0.9rem;font-weight: 300;border-radius: 4px;transition: all 0.3s ease;">
                </div>
            </form>
        </div>
    </section>
</body>
<script
    src="../js/javascript.js">
</script>

</html>