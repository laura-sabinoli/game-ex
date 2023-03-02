<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>HOME</title>
</head>
<style>
    body {
        background: linear-gradient(45deg, #f5f8fd, #fef6ff);
        background-repeat: no-repeat;
        min-height: 100vh;
    min-width: 100vw
    }
</style>
<?php
    if(session_status()!==PHP_SESSION_ACTIVE){
        session_start();
    }
    if(empty($_SESSION)){
        echo"<h1>você não pode acessar essa pagina!</h1>";
        unset($_SESSION);
        header("Refresh: 5, url=index.php");
    }
    
?>
<body>
    <header>
        <nav>
            <div class="logo"> Games EX </div>
            <div class="menu-btn">
                <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
            </div>
        </nav>
    </header>
    <div class="cardsJogo">
        <div class="cardGame">
            <img src="../images/back.png" />
            <h2>Jogo da Memória</h2>
            <a href="../php/memoria.php"><button>Jogar</button></a>

        </div>

        <div class="cardGame">
            <img class='velha' src="../images/velha.png"/>
            <h2>Jogo da Velha</h2>
            <a href="../php/velha.php"><button>Jogar</button></a>

        </div>
    </div>
</body>
<script src="../js/javascript.js"></script>



</html>