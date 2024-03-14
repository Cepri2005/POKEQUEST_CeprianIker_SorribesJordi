<?php
    session_start();
    if(!isset($_SESSION['OK3'])){
        header("Location: ./pregunta3.php?error=2");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMONQUEST</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../img/faviconpk.png" type="image/x-icon">
</head>
<body class="fondo4">
    <div class="container2">
        <h1>En que generacion se añadio el tipo hada?
            <div class="fila1_b"> 
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">
                <img class="pokeball" src="../img/pokeball.png">                    
            </div>
        </h1>
        <div>
            <img class="imgg" src="../img/sexta_generacion.jpg" alt="img">
        </div>
    </div>
    <div class="centro">
        <form action="../Verificacion/verificacion1.php" method="POST">
            <label for="Generacion"><h2>Generacion:</h2></label> <br>
            <input type="text" name="pregunta4" required> <br>
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
