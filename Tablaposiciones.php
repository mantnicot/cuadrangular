<?php 
$con=new mysqli("localhost","root","","cuadragunlar");  
?>
<html>
<script type="text/javascript">
function confirmarborrar(){
    var respuesta = confirm("¿Estas seguro de ELIMINAR los equipos?");
    if(var==TRUE)
    {
        return true;

    }
    else{
        false;
    }
}
</script>
<head>
   
    <meta chatset = "utf-8">
    <title>Tabla de posiciones</title>
    <style type="text/css">
        body {
          color: white;
          background-color: #d8da3d
          }
        </style>
</head>
<p style="text-align: -webkit-center; font-family: cursive  ">POSICIONES FINALES</p>
<body background="fondo.jpg">
<table border="2" style="padding: 15px;
  text-align: left;;
  color: white">
<tr>
    <td>Posicion del equipo </td>
    <td>Nombre del equipo</td>
    <td>Puntacion del equipo</td>
</tr>
<?php 
    $sql="SELECT * FROM equipos order by Puntos DESC;";
    $result=mysqli_query($con,$sql);
    $nm=1;
    while($mostrar=mysqli_fetch_array($result))
    {  
    ?>
    <tr>
    <td><?php echo $nm;?></td>
    <td><?php echo $mostrar['Nombre']?></td>
    <td><?php echo $mostrar['Puntos']?></td>
    </tr>
    <?php
$nm = $nm +1;    
}
    ?>
</table>

<form action="EliminarBasedatos.php" method="POST"> 
<input  type="submit" style="background-color: #f44336 ;border-radius: 8px;font-family: cursive " value="Reiniciar todo" ></p>
</form>
</div>
</body>
</html>