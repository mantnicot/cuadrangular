  <?php
     $user="root";
    $pass= "";
    $server= "localhost";
    $db="cuadragunlar";
    $con=new mysqli($server,$user,$pass,$db);

    if($con -> connect_error){
    die ("Error al conectar al BD".$con ->connect_error );
    }   

   $sql = "CREATE DATABASE cuadragunlar";
    if($con->query($sql) == TRUE){
      echo "base de datos creada";

    }else{
      echo "base de datos no creada". $con->connect_error;
    }
   
    $sql = "CREATE TABLE equipos ( 
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      Nombre VARCHAR(100) NOT NULL,
      Puntos INT(11)
    )";
    if($con->query($sql) == TRUE){
      echo "la tabla ha sido creada";

    }else{
      echo "la tabla no ha sido creada". $con->connect_error;
    }

header("location:Entrada.html");

    ?>   