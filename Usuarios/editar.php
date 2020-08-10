<?php
    require_once '../conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $consulta = "UPDATE usuarios SET nombre_usr = '$nombre',correo_usr = '$correo',password_usr =  '$password',roles_id_rol='$rol' WHERE id_usuario ='$id' ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>

