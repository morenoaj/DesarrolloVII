<!DOCTYPE html>
<html>
<head>
    <title>Selector de Imágenes</title>
</head>
<body>
    <h1>Imágenes basado en el Indicador de Ventas</h1>
    
    <form method="POST" action="Laboratorio8.1.php">
        <label for="indicador">Indicador de Ventas:</label>
        <input type="number" id="indicador" name="indicador" required>
        <input type="submit" value="Mostrar Imagen">
    </form>
    
    <?php
    // Clase para manejar el formulario
    class FormHandler {
        public function processForm() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $indicador = intval($_POST["indicador"]);
                $imageSelector = new ImageSelector();
                $imagen = $imageSelector->selectImage($indicador);
                $imageDisplayer = new ImageDisplayer();
                $imageDisplayer->displayImage($imagen);
            }
        }
    }
    
    // Clase para seleccionar la imagen
    class ImageSelector {
        public function selectImage($indicador) {
            if ($indicador >= 80 && $indicador <= 100) {
                return "verde.png";
            } elseif ($indicador >= 50 && $indicador <= 79) {
                return "amarillo.png";
            } else {
                return "rojo.png";
            }
        }
    }
    
    // Clase para mostrar la imagen
    class ImageDisplayer {
        public function displayImage($imagen) {
            if (file_exists($imagen)) {
                echo "<h2>Imagen Seleccionada:</h2>";
                echo "<img src='$imagen' alt='Imagen Seleccionada'>";
            } else {
                echo "<p>La imagen no se encuentra disponible.</p>";
            }
        }
    }
    
    // Procesa el formulario
    $formHandler = new FormHandler();
    $formHandler->processForm();
    ?>
    
    <div id="imagenContainer"></div>
    
    <script>
        function actualizarImagen() {
            var indicador = document.getElementById("indicador").value;
            var imagenContainer = document.getElementById("imagenContainer");

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    imagenContainer.innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "actualizar_imagen.php?indicador=" + indicador, true);
            xhr.send();
        }
    </script>
</body>
</html>
