<?php
    require_once '../conexion.php';
    $Status =$_POST['Status'];
  

    $consulta ="INSERT INTO estatus (nombre_estatus) VALUES ('$Status')";
    mysqli_query($mysqli,$consulta);
    header("Location: index.php")  



?>