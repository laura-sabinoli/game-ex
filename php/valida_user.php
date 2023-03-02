<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>
<body>
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
    .info{
        color:white;
        white:100%;
        height:100%;
        border: magenta;

    }
    .ndados{
        color:white;
        white:100%;
        height:100%;

    }
    </style>
<?php
$dados=filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(isset($dados)){

    if(file_exists("usuario.json")){
        $arq=file_get_contents("usuario.json");
        $arq = json_decode($arq, true);
        foreach($arq as $a){
            if ($a['email']== $dados['email'] && $a['senha']== $dados['senha']){
                session_start();
                $_SESSION = array('nomeCad'=> $a['nomeCad'],'email' => $a['email']);
                header('Location:../php/home.php');
            }
        }
    }else{
        echo "<div style='color:white;'>não existem dados para validar!<br>
        <a href='../php/criarConts.php'>crie o seu usuario clicando aqui!</a><div>";
    }
}
if(!isset($_SESSION)){
    echo "<div  style='color:white;'>usuario não existe no sistema</div>";
    header("Refresh: 2, url=../php/index.php");
}
?>
</body>
</html>