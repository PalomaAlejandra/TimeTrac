<?php 
session_start();
require_once '../conexion.php';
    $Tarea=$_POST['Tarea'];
    $proy =$_POST['proy'];
    $usu =$_POST['usu'];
    


    $consulta ="INSERT INTO detalle (tareas_id_tarea, proyectos_id_proyecto,id_asignador, id_responsable, estatus_id_estatus) VALUES ('$Tarea','$proy', '".$_SESSION['id']."','$usu', 1)";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php")
 ?>