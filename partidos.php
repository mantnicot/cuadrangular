<?php 
$con=new mysqli("localhost","root","","cuadragunlar");  
?>
<html>
<head>
    <meta chatset = "utf-8">
    <title> Ingreso de marcadores</title>
    <style type="text/css">
        body {
          color: white;
          background-color: #d8da3d
          }
        </style>
</head>
<p style="text-align: -webkit-center; font-family: cursive  ">SELECCIÓN DE MARCADORES</p>
<body background="fondo bueno.png">
<form style="text-align: -webkit-center; font-family: cursive  " action="procesar2.php" method="POST">
<table style= " padding: 15px;
  text-align: left; background-color: #04AA6D;
  color: white"border="2">
<tr>
    <td>Equipo</td>
    <td>Goles A</td>
    <td>Goles B</td>
    <td>Equipo</td>
   
</tr>
    <?php 
    $nm=1;
    $sql="SELECT * FROM equipos";
    $result=mysqli_query($con,$sql);
    while($mostrar=mysqli_fetch_array($result))
    {
        if($nm == 1)
        {
            $equipo1 = Array("".$mostrar['Nombre'],$mostrar['id']);
        }
        if($nm == 2)
        {
            $equipo2 = Array("".$mostrar['Nombre'],$mostrar['id']);
        }
        if($nm == 3)
        {
            $equipo3 = Array("".$mostrar['Nombre'],$mostrar['id']);
        }
        if($nm == 4)
        {
            $equipo4 = Array("".$mostrar['Nombre'],$mostrar['id']);
        }
        $nm=$nm+1;
    }
    ?>
    
    <tr>

    <td><?php echo $equipo1[0]?></td>
    <td><input type="text" size="1" name="goles1"/td>
    <td><input type="text" size="1" name="goles2"/td>
    <td><?php echo $equipo2[0]?></td>
    

     </tr>
     <tr>
    <td><?php echo $equipo1[0]?></td>
    <td><input type="text" size="1" name="goles3"/td>
    <td><input type="text" size="1" name="goles4"/td>
    <td><?php echo $equipo3[0]?></td>
    
  
     </tr>
     <tr>
    <td><?php echo $equipo1[0]?></td>
    <td><input type="text" size="1" name="goles5"/td>
    <td><input type="text" size="1" name="goles6"/td>
    <td><?php echo $equipo4[0]?></td>
    

     </tr>
     <tr>
    <td><?php echo $equipo2[0]?></td>
    <td><input type="text" size="1" name="goles7"/td>
    <td><input type="text" size="1" name="goles8"/td>
    <td><?php echo $equipo3[0]?></td>
    
  
     </tr>
     <tr>
    <td><?php echo $equipo2[0]?></td>
    <td><input type="text" size="1" name="goles9"/td>
    <td><input type="text" size="1" name="goles10"/td>
    <td><?php echo $equipo4[0]?></td>
   
  
     </tr>
     <tr>
    <td><?php echo $equipo3[0]?></td>
    <td><input type="text" size="1" name="goles11"/td>
    <td><input type="text" size="1" name="goles12"/td>
    <td><?php echo $equipo4[0]?></td>
     </tr>


</table>
<p><input type="submit" value="Enviar" ></p>
</form>
</div>
</body>
</html>