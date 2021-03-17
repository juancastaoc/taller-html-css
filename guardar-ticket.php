<?php

  
    // conectando a la base de datos


    $host = "localhost";
    $dbname ="transporte_pasajeros";
    $username = "root";
    $password= "";

    
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);


    //construyendo la  sentencia SQL

    $sql = "SELECT cod_cliente, nombre FROM clientes";

    //Preparando la sentencia

    $q = $cnx->prepare($sql);
    // Ejecutando la sentencia SQL
    $result = $q->execute();
    $clientes = $q->fetchAll();


    //construyendo la  sentencia SQL

    $sql = "SELECT id, ruta FROM rutas";

    //Preparando la sentencia

    $q = $cnx->prepare($sql);
    // Ejecutando la sentencia SQL
    $result = $q->execute();
    $rutas = $q->fetchAll();

?>


<?php


    $clientes = $_REQUEST["clientes"];
    $rutas = $_REQUEST["rutas"];
    $fecha = $_REQUEST["fecha"];
    
    //1. Connect to Database
    $host = "localhost";
    $dbname = "transporte_pasajeros";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//2. Build SQL sentence
    $sql = "INSERT INTO ticket (id, fecha, cod_ruta, cod_cliente) VALUES(NULL, '$fecha', '$rutas', '$clientes')";

    //3. Prepare SQL sentence
    $q = $conexion->prepare($sql);

    //4. Execute SQL sentence
    $resultado = $q->execute();   
    
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css-html/postgrados.css"  >
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/128932/isolated/lists/1748c091baa8457412d596058c203599-icono-de-circulo-de-autobus-de-viaje.png">
    <title>Crear ticket</title>
</head>
<body>
    
    <nav id="titulo2"> 
        <h1>Transportes urban</h1>
    </nav>

    <section>
    
    <img src="imagen/trasnsportes.jpg" width="600px;  height: 600px">

    </section>


    <section>
    
        <h2>
            Crear ticket 
        </h2>
        <section>


        <section> 










