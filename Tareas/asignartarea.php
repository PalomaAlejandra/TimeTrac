<?php 
require_once '../conexion.php';
    $Tarea=$_POST['Tarea'];
    $usu =$_POST['usu'];
    $proy =$_POST['proy'];


    $consulta ="INSERT INTO detalle (tareas_id_tarea, proyectos_id_proyecto, id_responsable) VALUES ('$Tarea','$proy', '$usu')";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php")
 ?>