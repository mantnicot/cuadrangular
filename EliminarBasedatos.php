<?php
     $user="root";
    $pass= "";
    $server= "localhost";
    $db="cuadragunlar";
    $con=new mysqli($server,$user,$pass,$db);

    if($con -> connect_error){
    die ("Error al conectar al BD".$con ->connect_error );
    }   

   $sql = "DELETE FROM equipos";
    if($con->query($sql) == TRUE){
      echo "base de datos creada";

    }else{
      echo "base de datos no creada". $con->connect_error;
    }

    header("Location:inicio.html");
    ?>   