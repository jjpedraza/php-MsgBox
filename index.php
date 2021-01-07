<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de MsgBOX para PHP</title>

    <!-- BOOTSTRAP -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">    
    <!-- <script src="popper.js/dist/popper.min.js"></script> -->


    <!-- Instanciar MsgBox php -->
    <link rel="stylesheet" href="php-MsgBox.min.css">   
    <?php require("php-MsgBox.min.php"); ?>

    <style>
    </style>
</head>
<body>
<h1>MsgBox para PHP </h1>
    
    <lu>
        <li><a href='?ej=1'>Ejemplo 1: Mensaje con Aceptar hacia el index del proyecto</a></li>
        <li><a href='?ej=2'>Ejemplo 2: Mensaje con Aceptar hacia el pagina personalizada</a></li>
        <li><a href='?ej=3'>Ejemplo 3: Mensaje con Aceptar hacia el pagina personalizada, con Texto Personalizado en boton</a></li>
        <li><a href='?ej=4'>Ejemplo 4: Pregunta, se envia GET Cuestion FALSE o TRUE</a></li>




    </lu>



    <?php
    if (isset($_GET['ej'])){
        if ($_GET['ej']==1){
            MsgBox("Texto de Ejemplo");

        }

        if ($_GET['ej']==2){
            MsgBox("Texto de Ejemplo","https://google.com"); //<-- destino del boton aceptar

        }


        if ($_GET['ej']==3){ // con texto en el boton
            MsgBox("Texto de Ejemplo","https://google.com", "Ir a Google"); //<-- destino del boton aceptar

        }

        if ($_GET['ej']==4){//pregunta
            MsgBox("¿Pregunta?","index.php","SI" ,"NO" , 1); //<-- destino del boton aceptar

        }

    }

    ?>
</body>
</html>