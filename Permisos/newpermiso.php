<?php
    require_once '../conexion.php';
    $Permiso =$_POST['Permiso'];
  

    $consulta ="INSERT INTO roles (nombre_rol) VALUES ('$Permiso')";
    mysqli_query($mysqli,$consulta);
    header("Location: index.php")  



?>