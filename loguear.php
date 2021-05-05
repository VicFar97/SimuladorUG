<?php
  
  $usuario= $_POST['username'];
  $contraseña= $_POST['password'];
  session_start();
  $_SESSION['username']=$usuario;

  include('db.php'); //incluimos la conexion
  

  $consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_num_rows($resultado);

  if($filas){
    
      header("location:inicio.php");

  }else{
      ?>
      <?php
      include("index.php");

    ?>
    <h4 class="bad">Datos erróneos. Por favor, inténtelo otra vez.</h4>
    <?php
  }
mysqli_free_result($resultado);
mysqli_close($conexion);