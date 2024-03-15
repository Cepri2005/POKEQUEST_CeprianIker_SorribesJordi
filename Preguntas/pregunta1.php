<head>
    <meta charset='UTF-8'>";
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    <title>POKEMONQUEST</title>";
    <link rel='icon' href='../img/faviconpk.png' type='image/x-icon'>";
    <link rel='stylesheet' href='../CSS/style.css'>";
</head>
<body class="fondo1">
    <header>
        <div class="titulo">
            <h1 class="h1b">Que inicial es de 4 Generacion? <br>
            <?php
    if(isset($_GET['error']) &&  $_GET['error'] == 1){
        echo "Error, la pista es: El inicial de 4 Generacion es de tipo planta y empieza con T.";
}
    if(isset($_GET['error']) &&  $_GET['error'] == 2){
        header("location: ./pregunta1.php");
        echo "No te intentes colar payaso, ahora por gracioso te vuelves al inicio, besis de fresi :v";
}
?>
            </h1>
        </div>
    </header>
    <section class="pokemons">
        <div class="pokeball-container">
            <img src="../img/emboar.png">
        </div>
        <div class="pokeball-container">
            <img src="../img/blastoise_e.png">
        </div>
        <div class="pokeball-container">
            <img src="../img/torterra.png">
        </div>
    </section>
    <section class="form">
        <div class="centro">
            <form action="../Verificacion/verificacion1.php" method="POST">
                <label for="tipo"><h2>Que inicial eliges?
                </h2></label> <br>
                <input type="text" name="pregunta1" required> <br>
                <input type="image" src="../img/caramelo.png">
            </form>        
        </div>    
    </section>
</body>
</html>
