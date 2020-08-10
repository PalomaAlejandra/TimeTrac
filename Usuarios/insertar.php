<?php
    require_once '../conexion.php';
    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];
    $password =$_POST['password'];
    $rol =$_POST['rol'];

    $consulta ="INSERT INTO usuarios (nombre_usr,correo_usr,password_usr,roles_id_rol) VALUES ('$nombre','$correo','$password','$rol')";
    mysqli_query($mysqli,$consulta);
    header("Location: index.php")  



?>