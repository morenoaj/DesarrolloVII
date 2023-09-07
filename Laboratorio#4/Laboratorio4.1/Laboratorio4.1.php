<!DOCTYPE html>
<html>
<head>
    <title>Selector de Imágenes</title>
</head>
<body>
    <h1>Imágenes basado en el Indicador de Ventas</h1>
    
    <form method="POST" action="Laboratorio4.1.php">
        <label for="indicador">Indicador de Ventas:</label>
        <input type="number" id="indicador" name="indicador" required>
        <input type="submit" value="Mostrar Imagen">
    </form>
    
    <?php
    // Manejo del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el valor del indicador de ventas
        $indicador = intval($_POST["indicador"]);
        
        // Determinar qué imagen mostrar según el rango del indicador
        if ($indicador >= 80 && $indicador <= 100) {
            $imagen = "verde.png";
        } elseif ($indicador >= 50 && $indicador <= 79) {
            $imagen = "amarillo.png";
        } else {
            $imagen = "rojo.png";
        }
        
        // Verificar si la imagen existe antes de mostrarla
        if (file_exists($imagen)) {
    ?>
    
    <h2>Imagen Seleccionada:</h2>
    <img src="<?php echo $imagen; ?>" alt="Imagen Seleccionada">
    
    <?php
        } else {
            echo "<p>La imagen no se encuentra disponible.</p>";
        }
    }
    ?>

    <script>
        function actualizarImagen() {
            var indicador = document.getElementById("indicador").value;
            var imagenContainer = document.getElementById("imagenContainer");

            // Realiza una solicitud AJAX para obtener la imagen según el indicador
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Cambia el contenido del div con la nueva imagen
                    imagenContainer.innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "actualizar_imagen.php?indicador=" + indicador, true);
            xhr.send();
        }
    </script>
</body>
</html>
