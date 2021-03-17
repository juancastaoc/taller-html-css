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


        $sql = "SELECT id, ruta FROM rutas";
            

        //Preparando la sentencia

        $q = $cnx->prepare($sql);

        // Ejecutando la sentencia SQL

        $result = $q->execute();

        $rutas = $q->fetchAll();

     
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
    
<nav class="h1"> 
        <h1>Transportes Urban</h1>
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
            

        <form action="guardar-ticket.php" method="POST">

         cliente:
            
             <select name=" clientes" id= "">

            <option value="" > seleccionar </option>

            
<?php
        for ($i=0; $i<count($clientes); $i++){

            ?>
                       
                    
            <option 
            
            value="<?php echo $clientes[$i]["cod_cliente"] ?>">
                    <?php echo $clientes[$i]["nombre"] ?>
        
            </option> 
<?php
        }

?>
            </select>

         <br/><br/>

            ruta:
            
            <select name="rutas" id= ""> 

           <option value="" > seleccionar </option>

           
<?php
       for ($i=0; $i<count($rutas); $i++){

           ?>
        
                        
           <option 
           
           value="<?php echo $rutas[$i]["id"] ?>">
                   <?php echo $rutas[$i]["ruta"] ?>
       
           </option> 
<?php
       }
?>
    
        </select>

        <br/><br/>
        Fecha:<input type="text" name="fecha">
        <br/><br/>


        <br/><br/>
        <section>
       
       <input type ="submit" value="Crear ticket"  >

        </section>






    
    </form>  
        </section> 

       
</body>
</html>

