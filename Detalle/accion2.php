<?php 
require_once '../conexion.php';

date_default_timezone_set('America/Mexico_City');
$time = date('Y-m-d H:i:s', time());
$id = $_GET['id'];

$consulta = "UPDATE detalle SET fecha_fin = '$time', estatus_id_estatus=3  WHERE id_detalle =$id";

        mysqli_query($mysqli, $consulta);
        header("Location: index.php");

        
?>