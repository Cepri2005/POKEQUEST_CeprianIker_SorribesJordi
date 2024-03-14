<?php
    session_start();
    if(!isset($_SESSION['OK6'])){
        header("Location: ./pregunta6.php?error=2");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="icon" href="../img/faviconpk.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>POKEMONQUEST</title>
</head>
</head>
<body class="fondo7">
        <div class="fila1"> 
            <img class="pokeball" src="../img/pokeball.png">
            <img class="pokeball" src="../img/pokeball.png">
            <img class="pokeball" src="../img/pokeball.png">
            <img class="pokeball" src="../img/pokeball.png">
            <img class="pokeball" src="../img/pokeball.png">
            <img class="pokeball" src="../img/pokeball.png">
        </div>
    <div class="final">
        <p class="texto-pokemon">
        ¡Enhorabuena por completar la Pokédex!<br>
        Has demostrado una increíble dedicación y conociemiento al atrapar a todos los Pokémon conocidos.<br>
        ¡Felicitaciones por este logro excepcional!<br>
        Que tu viaje como entrenador Pokémon continúe siendo emocionante y lleno de aventuras.
        </p>
    </div>
    <div class="centro">
        <form action="../index.html" method="POST">
            <h3>Reiniciar</h3>
            <input type="image" src="../img/caramelo.png">
        </form>
    </div> 
</body>
</html>
<?php
    if(isset($_GET['error']) &&  $_GET['error'] == 1){
        echo "";
    }
    if(isset($_GET['error']) &&  $_GET['error'] == 2){
        echo "No te intentes colar payaso, ahora por gracioso te vuelves al inicio, besis de fresi :v";
    }
?>
