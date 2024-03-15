<?php
    session_start();
    if(!isset($_SESSION['OK5'])){
        header("Location: ./pregunta5.php?error=2");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMONQUEST</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../img/faviconpk.png" type="image/x-icon">
</head>
<body class="fondo6">
    <div class="container2">
        <h1>¿Cuantos años ha tardado ASH en lograr convertirse en campeon mundial (desde su primera emision en television)? <br>
        <?php
    if(isset($_GET['error']) &&  $_GET['error'] == 1){
        echo "Error, la pista es: Supera los 20 años";
}
    if(isset($_GET['error']) &&  $_GET['error'] == 2){
        header("location: ./pregunta1.php");
        echo "No te intentes colar payaso, ahora por gracioso te vuelves al inicio, besis de fresi :v";
}
?>
            <div class="fila1_b"> 
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">                    
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">
            </div>
        </h1>
        <div>
            <img class="imgg" src="../img/Ash.jpg" alt="img">
        </div>
    </div>
    <div>
        <div class="centro">
            <form action="../Verificacion/verificacion1.php" method="POST">
                <label for="region"><h2>Cuantos años ha tardado?</h2></label> <br>
                <input type="text" name="pregunta6" required> <br>
                <input type="image" src="../img/caramelo.png">
            </form>
        </div>  
    </div>
</body>
</html>

