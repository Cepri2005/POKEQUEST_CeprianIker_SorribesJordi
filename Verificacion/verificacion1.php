<?php
$pregunta1 = $_POST['pregunta1'];
if(isset($pregunta1) && $pregunta1 == "Torterra" ){
    session_start();
    $_SESSION['OK1'] = $pregunta1;
    header("location: ../Preguntas/pregunta2.php"); 
} else if (isset($pregunta1) && $pregunta1 != "Torterra" ){
    header("location: ../Preguntas/pregunta1.php?error=1"); 
}

$pregunta2 = $_POST['pregunta2'];
if(isset($pregunta2) && $pregunta2 == "Hada" ){
    session_start();
    $_SESSION['OK2'] = $pregunta2;
    header("location: ../Preguntas/pregunta3.php?error=1");
} elseif (isset($pregunta2) && $pregunta2 != "Hada"){
    header("location: ../Preguntas/pregunta2.php?error=1");
}

$pregunta3 = $_POST['pregunta3'];
if(isset($pregunta3) && $pregunta3 == "Mew" ){
    session_start();
    $_SESSION['OK3'] = $pregunta3;
    header("location: ../Preguntas/pregunta4.php?error=1");
} elseif (isset($pregunta3) && $pregunta3 != "Mew"){
    header("location: ../Preguntas/pregunta3.php?error=1");
}

$pregunta4 = $_POST['pregunta4'];
if(isset($pregunta4) && $pregunta4 == "Sexta" ){
    session_start();
    $_SESSION['OK4'] = $pregunta4;
    header("location: ../Preguntas/pregunta5.php?error=1");
} elseif (isset($pregunta4) && $pregunta4 != "Sexta"){
    header("location: ../Preguntas/pregunta4.php?error=1");
}

$pregunta5 = $_POST['pregunta5'];
if(isset($pregunta5) && $pregunta5 == "Sinnoh" ){
    session_start();
    $_SESSION['OK5'] = $pregunta5;
    header("location: ../Preguntas/pregunta6.php?error=1");
} elseif (isset($pregunta5) && $pregunta5 != "Sinnoh"){
    header("location: ../Preguntas/pregunta5.php?error=1");
}

$pregunta6 = $_POST['pregunta6'];
if(isset($pregunta6) && $pregunta6 == "25 Años" ){
    session_start();
    $_SESSION['OK6'] = $pregunta6;
    header("location: ../Preguntas/congratulations.php?error=1");
} elseif (isset($pregunta6) && $pregunta6 != "25 Anos"){
    header("location: ../Preguntas/pregunta6.php?error=1");
}
?>
