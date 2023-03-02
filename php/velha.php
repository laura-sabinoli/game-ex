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
    <title>jogo da velhar</title>
</head>
<style>
    body {
        background: linear-gradient(45deg, #f5f8fd, #fef6ff);
        background-repeat: no-repeat;
        min-height: 100vh;
    min-width: 100vw
    }
</style>

<body>
    <header>
        <nav>
            <div class="logo">Games EX</div>
            <div class="menu-btn">
                <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
            </div>
            <ul>
                <li><a href="../php/home.php">Jogos</a></li>
            </ul>
        </nav>
    </header>
    <div class="contentVelha">
        <h2>JOGO DA VELHA</h2>
        <br>
        <div class="game">
            <button data-i="1"></button>
            <button data-i="2"></button>
            <button data-i="3"></button>
            <button data-i="4"></button>
            <button data-i="5"></button>
            <button data-i="6"></button>
            <button data-i="7"></button>
            <button data-i="8"></button>
            <button data-i="9"></button>
        </div>
        <br>
        <h2 class="currentPlayer"></h2>
    </div>
</body>
<script src="../js/javascript.js"></script>



</html>