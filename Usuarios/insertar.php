<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();

    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];
    $password =$_POST['password'];
    $rol =$_POST['rol'];
   

    

    $consulta ="INSERT INTO usuarios (nombre_usr,correo_usr,password_usr,roles_id_rol) VALUES ('$nombre','$correo','$password','$rol')";
    mysqli_query($mysqli,$consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('INSERT','Se ha agregado un registro en la tabla','usuarios','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php")  



?>