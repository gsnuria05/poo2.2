<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centrar Contenido en PHP</title>
</head>
<body>

<div style="text-align: center;">
    <?php
    // Llamamos a la clase Cabecera
    include('Cabecera.php');
    
    // Creamos objeto de tipo Cabecera
    $titulo = new Cabecera();
    
    // Seteamos título de dicho objeto (añadir parámetro)
    $titulo->setTitulo('Este es el título');
    
    // Imprimimos por pantalla utilizando getter
    echo "<h1>{$titulo->getTitulo()}</h1>";
    ?>
</div>

</body>
</html>
