<?php
// Inicializar una sesión
session_start();

// Inicializar o recuperar el arreglo de números pares desde la sesión
if (!isset($_SESSION['numerosPares']) || isset($_POST['reset'])) {
    $_SESSION['numerosPares'] = array();
}

// Inicializar o recuperar el contador desde la sesión
if (!isset($_SESSION['contador']) || isset($_POST['reset'])) {
    $_SESSION['contador'] = 0;
}

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    // Validar si el número es par
    if ($numero % 2 == 0) {
        $_SESSION['numerosPares'][] = $numero;
        $_SESSION['contador']++;
    } else {
        echo "El número ingresado no es par. Intente nuevamente.\n";
    }
}

// Mostrar el formulario para ingresar números pares
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Arreglo de Números Pares</title>
</head>
<body>
    <h1>Llenar un Arreglo con Números Pares</h1>
    
    <form method="POST" action="Laboratorio4.4.php">
        <label for="numero">Ingrese un número par:</label>
        <input type="number" id="numero" name="numero" min="2" step="2">
        <input type="submit" value="Agregar Número">
        <input type="submit" name="reset" value="Refrescar">
    </form>
    
    <?php
    // Mostrar el arreglo de números pares
    echo "<p>Arreglo llenado con números pares:</p>";
    echo "<pre>" . print_r($_SESSION['numerosPares'], true) . "</pre>";
    
    // Mostrar el número de intentos
    echo "<p>Se ingresaron " . $_SESSION['contador'] . " números pares.</p>";
    ?>
</body>
</html>
