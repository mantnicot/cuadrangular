<?php
 $user="root";
 $pass= "";
 $server= "localhost";
 $db="cuadragunlar";
 $con=new mysqli($server,$user,$pass,$db);

 if($con -> connect_error){
 die ("Error al conectar al BD".$con ->connect_error );
 }   
    $equipo1 = $_POST['equipo1'];
    $equipo2 = $_POST['equipo2'];
    $equipo3 = $_POST['equipo3'];
    $equipo4 = $_POST['equipo4'];

if(isset($_POST['equipo1']))
{
    $texto = $_POST['equipo1'];
    $sql = " INSERT INTO `equipos` (`id`, `Nombre`, `Puntos`) VALUES (NULL, '$equipo1', '0');";
    if($con->query($sql)==TRUE)
    {
        echo 'dios';
    }else{
        die("Error al insertar equipo 1 ".$con->connect_error);
    }

}
if(isset($_POST['equipo2']))
{
    $texto = $_POST['equipo2'];
    $sql = " INSERT INTO `equipos` (`id`, `Nombre`, `Puntos`) VALUES (NULL, '$equipo2', '0');";
    if($con->query($sql)==TRUE)
    {
        echo 'dios2';
    }else{
        die("Eror al insertar equipo 2 ".$con->connect_error);
    }

}
if(isset($_POST['equipo3']))
{
    $texto = $_POST['equipo3'];
    $sql = " INSERT INTO `equipos` (`id`, `Nombre`, `Puntos`) VALUES (NULL, '$equipo3', '0');";
    if($con->query($sql)==TRUE)
    {
        echo 'dios3';
    }else{
        die("Eror al insertar equipo 3 ".$con->connect_error);
    }
}
if(isset($_POST['equipo4']))
{
    $texto = $_POST['equipo4'];
    $sql = " INSERT INTO `equipos` (`id`, `Nombre`, `Puntos`) VALUES (NULL, '$equipo4', '0');";
    if($con->query($sql)==TRUE)
    {
        echo 'dios4';
    }else{
        die("Eror al insertar equipo 4 ".$con->connect_error);
    }
}
header("Location:partidos.php");


?>