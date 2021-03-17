<?php

    $ruta = $_REQUEST ["ruta"];
    $horario = $_REQUEST ["horario"];
    $costo = $_REQUEST ["costo"];
     
    // conectando a la base de datos


    $host = "localhost";
    $dbname ="transporte_pasajeros";
    $username = "root";
    $password= "";

    
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);


    //construyendo la  sentencia SQL

    $sql = "INSERT INTO rutas (id, ruta, horario, costo) VALUES ( NULL,'$ruta', '$horario','$costo') "  ;

    //Preparando la sentencia

    $q = $cnx->prepare($sql);


    // Ejecutando la sentencia SQL

    $result = $q->execute();

    if ($result){
    echo "Se guardo con éxito";


   }
    else {
    echo "se presentó un error $ruta";

    }  

 ?>   






