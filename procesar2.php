<?php
$user="root";
$pass= "";
$server= "localhost";
$db="cuadragunlar";
$con=new mysqli($server,$user,$pass,$db);

if($con -> connect_error){
die ("Error al conectar al BD".$con ->connect_error );
}
$nm=1;
$sql="SELECT * FROM equipos";
    $result=mysqli_query($con,$sql);
    while($mostrar=mysqli_fetch_array($result))
    {
        if($nm == 1)
        {
            $equipo1 = $mostrar['id'];
        }
        if($nm == 2)
        {
            $equipo2 = $mostrar['id'];
        }       
        if($nm == 3)
        {
            $equipo3 = $mostrar['id'];
        }
        if($nm == 4)
        {
            $equipo4 = $mostrar['id'];
        }
        $nm=$nm+1;
    }
$goles1 = $_POST['goles1'];
$goles2 = $_POST['goles2'];
$goles3 = $_POST['goles3'];
$goles4 = $_POST['goles4'];
$goles5 = $_POST['goles5'];
$goles6 = $_POST['goles6'];
$goles7 = $_POST['goles7'];
$goles8 = $_POST['goles8'];
$goles9 = $_POST['goles9'];
$goles10 = $_POST['goles10'];
$goles11 = $_POST['goles11'];
$goles12 = $_POST['goles12'];
$nump1=0;
$nump2=0;

if($goles1 >= $goles2)
{
    if($goles1 == $goles2)
    { 
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1  WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo2;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }
    else{

        $sql = "UPDATE `equipos` SET `Puntos` = `Puntos`+3  WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){echo "2funciono11,empate";}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
        }
     }
}
else{
    $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo2;";
    if($con->query($sql1) == TRUE){}else{
        echo "No se ha actualizado el puntaje". $con->connect_error;
      }
}
$sql="";
$sql1="";
if($goles3 >= $goles4)
{
    if($goles3 == $goles4)
    {
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo3;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }else{
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){echo "";}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        }
    }
else{     
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo3;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
}
$sql="";
$sql1="";
if($goles5 >= $goles6)
{
    if($goles5 == $goles6)
    {
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo4;";
        if($con->query($sql1) == TRUE){echo "";}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }else{
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` = $equipo1;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }
       
}
else{
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo4;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
}
$sql="";
$sql1="";
if($goles7 >= $goles7)
{
    if($goles7 == $goles8)
    {
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` = $equipo2;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo3;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }else{
    $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` = $equipo2;";
    if($con->query($sql) == TRUE){}else{
        echo "No se ha actualizado el puntaje". $con->connect_error;
      }
    }
}
else{
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo3;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
}
$sql="";
$sql1="";
if($goles9 >= $goles10)
{
    if($goles9 == $goles10)
    {
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` = $equipo2;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo4;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }
    else{
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` = $equipo2;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        }
}
else{
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo4;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
}
$sql="";
$sql1="";
if($goles11 >= $goles12)
{
    if($goles11 == $goles12)
    {        
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` = $equipo3;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+1 WHERE `equipos`.`id` =  $equipo4;";
        if($con->query($sql1) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
    }else{
 
        $sql = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` = $equipo3;";
        if($con->query($sql) == TRUE){}else{
            echo "No se ha actualizado el puntaje". $con->connect_error;
          }
        }
}
else{
    $sql1 = " UPDATE `equipos` SET `Puntos` = `Puntos`+3 WHERE `equipos`.`id` =  $equipo4;";
    if($con->query($sql1) == TRUE){}else{
        echo "No se ha actualizado el puntaje". $con->connect_error;
      }
}
header("Location:Tablaposiciones.php");
?>