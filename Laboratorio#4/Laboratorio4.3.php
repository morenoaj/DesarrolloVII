<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mayor Elemento en Arreglo</title>
</head>
<body>
    <h1>Mayor Elemento en un Arreglo</h1>
    
    <?php
    // Inicializar un arreglo unidimensional de 20 elementos
    $arreglo = array();
    
    // Llenar el arreglo con valores diferentes
    for ($i = 0; $i < 20; $i++) {
        $valor = rand(1, 100); // Generar un valor aleatorio
        while (in_array($valor, $arreglo)) {
            $valor = rand(1, 100); // Asegurarse de que el valor sea único
        }
        $arreglo[$i] = $valor;
    }
    
    // Encontrar el elemento mayor y su posición
    $elementoMayor = max($arreglo);
    $posicionMayor = array_search($elementoMayor, $arreglo);
    
    // Mostrar el arreglo
    echo "<p>Arreglo llenado:</p>";
    echo "<pre>" . print_r($arreglo, true) . "</pre>";
    
    // Mostrar el elemento mayor y su posición
    echo "<p>El elemento mayor es $elementoMayor y se encuentra en la posición $posicionMayor.</p>";
    ?>
</body>
</html>

