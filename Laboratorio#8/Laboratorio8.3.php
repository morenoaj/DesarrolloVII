<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mayor Elemento en Arreglo</title>
</head>
<body>
    <h1>Mayor Elemento en un Arreglo</h1>
    
    <?php
    // Clase para trabajar con el arreglo
    class ArrayHandler {
        private $arreglo = array();

        public function __construct($size) {
            // Llenar el arreglo con valores diferentes
            for ($i = 0; $i < $size; $i++) {
                $valor = rand(1, 100); // Generar un valor aleatorio
                while (in_array($valor, $this->arreglo)) {
                    $valor = rand(1, 100); // Asegurarse de que el valor sea único
                }
                $this->arreglo[$i] = $valor;
            }
        }

        public function getArray() {
            return $this->arreglo;
        }

        public function findMaxElement() {
            $elementoMayor = max($this->arreglo);
            $posicionMayor = array_search($elementoMayor, $this->arreglo);
            return [$elementoMayor, $posicionMayor];
        }
    }

    // Crear una instancia de la clase ArrayHandler
    $arrayHandler = new ArrayHandler(20);

    // Obtener el arreglo
    $arreglo = $arrayHandler->getArray();

    // Obtener el elemento mayor y su posición
    list($elementoMayor, $posicionMayor) = $arrayHandler->findMaxElement();

    // Mostrar el arreglo
    echo "<p>Arreglo llenado:</p>";
    echo "<pre>" . print_r($arreglo, true) . "</pre>";

    // Mostrar el elemento mayor y su posición
    echo "<p>El elemento mayor es $elementoMayor y se encuentra en la posición $posicionMayor.</p>";
    ?>
</body>
</html>
