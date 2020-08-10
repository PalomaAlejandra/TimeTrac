<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();
    $Status =$_POST['Status'];
  

    $consulta ="INSERT INTO estatus (nombre_estatus) VALUES ('$Status')";
    mysqli_query($mysqli,$consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('INSERT','Se ha agregado un registro en la tabla','Estatus','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php")  



?>