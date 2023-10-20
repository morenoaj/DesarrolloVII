<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 14.2</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    
    <h1>Consulta de noticias</h1>
    <?php
    if(isset($_SESSION['usuario_valido'])){
        require_once("class/noticias.php");

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias();

        $nfilas = count($noticias);

        if ($nfilas > 0){
            print("<table>\n");
            print("<tr>\n");
            print("<th>Título</th>\n");
            print("<th>Texto</th>\n");
            print("<th>Categoría</th>\n");
            print("<th>Fecha</th>\n");
            print("<th>Imagen</th>\n");
            print("</tr>\n");

            foreach ($noticias as $resultado){
                print("<tr>\n");
                print("<td>" . $resultado['titulo'] . "</td>\n");
                print("<td>" . $resultado['texto'] . "</td>\n");
                print("<td>" . $resultado['categoria'] . "</td>\n");
                print("<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>\n");

                if($resultado['imagen'] != ""){
                    print("<td><a target='_blank' href='img/" . $resultado['imagen'] . "'>
                    <img border='0' src='img/iconotexto.gif'></a></td>\n");
                }
                else{
                    print("<td>&nbsp;</td>\n");
                }
                print("</tr>\n");
            }
            print("</table>\n");
        }
        else{
            print("No hay noticias disponibles");
        }
        ?>
        <p>[<a href='login.php'>Menú Principal</a>]</p> <!-- Línea agregada -->
    <?php
    }else{
        print("<br><br>\n");
        print ("<p align='CENTER'>Acceso no autorizado</p>\n");
        print ("<p align='CENTER'>[<a href='login.php'>Conectar</a>]</p>\n");
    }
    ?>   
</body>
</html>
