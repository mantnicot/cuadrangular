<?php  
/*function conecta(){*/
    $user="root";
    $pass= "";
    $server= "localhost";
    $db="cuadrilatero";
    $con=new mysqli($server,$user,$pass);

    if($con -> connect_error){
    die ("Error al conectar al BD".$con ->connect_error );
    }
    /*mysql_query($server,$user,$pass) or die ("Error al conectar al BD".mysql_error());
    mysql_select_db($db,$con);
    return $con;

}
*/
    Echo "SI DIO";
?>