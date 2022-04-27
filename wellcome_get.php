<html>
    <head>
    <link rel="stylesheet" href="estil1.css">
    </head>
    <body>
    <respuesta>
    Gracias por comprar <?php echo $_GET["nombre"]; ?><br><br>
    Pelicula: Doctor Strange en el Multiverso de la Locura<br><br>
    Dia <?php echo $_GET["fecha"]; ?><br><br>
    Hora de la sesión: <?php echo $_GET["hora"]; ?><br><br>
    Tipo de butacas: <?php echo $_GET["entrada"]; ?><br><br>
    <input type="submit" value="Descargar Entradas">
    </respuesta>
    </body>
</html>