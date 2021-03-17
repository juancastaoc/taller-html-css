<?php

    $cedula = $_REQUEST ["cedula"];
    $nombre = $_REQUEST ["nombre"];
    $direccion = $_REQUEST ["direccion"];
    $celular = $_REQUEST ["celular"];
    

    // conectando a la base de datos


    $host = "localhost";
    $dbname ="transporte_pasajeros";
    $username = "root";
    $password= "";

    
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);


    //construyendo la  sentencia SQL

    $sql = "INSERT INTO clientes  ( cod_cliente, cedula, nombre, direccion, celular ) VALUES ( NULL,'$cedula','$nombre','$direccion','$celular') "  ;

    //Preparando la sentencia

    $q = $cnx->prepare($sql);


    // Ejecutando la sentencia SQL

    $result = $q->execute();

    if ($result){
    echo "Se guardo con éxito";


   }
    else {
    echo "se presentó un error $nombre";

    }  

 ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css-html/postgrados.css"  >
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/128932/isolated/lists/1748c091baa8457412d596058c203599-icono-de-circulo-de-autobus-de-viaje.png">
    <title>Registro cliente</title>
</head>
<body>
    
    <nav id="titulo2"> 
        <h1>Transportes urban</h1>
    </nav>

    <div>
       
    

    
    </div>

        <section>

            <img src="imagen/trasnsportes.jpg" width="600px;  height: 600px">

        </section>


    <section>
    
        <h2>
            Registro de clientes 
        </h2>
    <section>


        <section>  
            <form action= "guardar-cliente.php" >

                
                cedula: <input type="text" name="cedula"/><br/> 
                nombre: <input type="text" name="nombre"/><br/> 
                direccion: <input type="text" name="direccion"/><br/>
                celular: <input type="text" name="celular"/><br/>
                <br/>

                <input type="submit" value="Registrar nuevo cliente"/>

            </form>   
        </section> 


</body>
</html>


