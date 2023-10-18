<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio12</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</h2>
    <?php
    if(isset($_SESSION['var'])){
        $var = $_SESSION['var'];
    }else{
        $var = "";
    }
    print ("<p> Valor de la variable de sesion: $var<p>\n");
    session_destroy();
    ?>
    <a href="Laboratorio12.1.php">Volver al paso 1</a>
</body>
</html>