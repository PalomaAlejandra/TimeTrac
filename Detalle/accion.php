<?php 
require_once '../conexion.php';
date_default_timezone_set('America/Mexico_City');
$time = date('Y-m-d H:i:s', time());
$id = $_GET['id'];


$consulta = "UPDATE detalle SET fecha_inicio = '$time', estatus_id_estatus=2  WHERE tareas_id_tarea = $id";

        mysqli_query($mysqli, $consulta);
        header("Location: index.php")
        
?>