<?php
    session_start();
    if(!isset($_SESSION['OK1'])){
        header("Location: ./pregunta1.php?error=2");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMONQUEST</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../img/faviconpk.png" type="image/x-icon">
</head>
<body class="fondo2">
    <div class="container2">
        <h1>¿De que tipo es este pokemon? <br>
        <?php
    if(isset($_GET['error']) &&  $_GET['error'] == 1){
        echo "Error, la pista es: No es tipo Planta";
}
    if(isset($_GET['error']) &&  $_GET['error'] == 2){
        header("location: ./pregunta1.php?");
        echo "No te intentes colar payaso, ahora por gracioso te vuelves al inicio, besis de fresi :v";
}
?>
            <div class="fila1_b"> 
                <img class="pokeball" src="../img/pokeball.png">
            </div>
        </h1>
        <div>
            <img class="imgg" src="../img/comfey.png" alt="img">
        </div>
        <div class="contenedor-b">
            <div class="img2-b">
                <img src="../img/Dragon.png" alt="btn" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/planta.svg" alt="btn1" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/Hada.png" alt="btn2" width="200">
            </div>
            <div class="img2-b">
                <img src="../img/agua.svg" alt="btn3" width="200">
            </div>
        </div>
    </div>
    <div>
        <div class="centro">
            <form action="../Verificacion/verificacion1.php" method="POST">
                <label for="tipo"><h2>Tipo:</h2></label> <br>
                <input type="text" name="pregunta2" required> <br>
                <input type="image" src="../img/caramelo.png">
            </form>
        </div>      
    </div>
</body>
</html>
