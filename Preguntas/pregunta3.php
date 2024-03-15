<?php
    session_start();
    if(!isset($_SESSION['OK2'])){
    header("location: ./pregunta2.php?error=2");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMONQUEST</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../img/faviconpk.png" type="image/x-icon">
</head>
<body class="fondo3">
    <div class="container2">
        <h1>Cual es el ultimo pokemon de la pokedex de la primera Generacion? <br>
        <?php
    if(isset($_GET['error']) &&  $_GET['error'] == 1){
        echo "Error, la pista es: El ultimo pokemon empieza por M y es pequeño";
}
    if(isset($_GET['error']) &&  $_GET['error'] == 2){
        header("location: ./pregunta1.php");
        echo "No te intentes colar payaso, ahora por gracioso te vuelves al inicio, besis de fresi :v";
}
?>
            <div class="fila1_b"> 
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">
            </div>
        </h1>
        <div>
            <img class="imgg" src="../img/pokedex.png" alt="img">
        </div>
        <div class="contenedor-b">
            <div class="img2-b">
                <img src="../img/mew.png" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/arceus.png" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/mewtwo.png" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/pikachu_e.png" width="200">
            </div>
        </div>
    </div>
    <div class="centro">
        <div class="form-container">
            <form action="../Verificacion/verificacion1.php" method="POST">
                <label for="pokemon"><h2>Nombre:</h2></label> <br>
                <input type="text" name="pregunta3" required> <br>
                <input type="image" src="../img/caramelo.png">
            </form>
        </div>
    </div>
</body>
</html>
