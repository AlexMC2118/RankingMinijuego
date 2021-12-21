<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Crud puntuación </title>
    		<link rel="stylesheet" type="text/css" href="css/estiloGeneral.css" />
    		<link rel="stylesheet" type="text/css" href="css/estiloPuntos.css" />
    </head>
    <body>
        <main>
            <?php
                require 'archivos/controlador.php'; //llamamos a los parametros para la conexion
                $procesos = new Controlador();
            ?>
        </main>
    </body>
</html>
