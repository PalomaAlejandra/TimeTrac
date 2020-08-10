<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $consulta = "UPDATE usuarios SET nombre_usr = '$nombre',correo_usr = '$correo',password_usr =  '$password',roles_id_rol='$rol' WHERE id_usuario ='$id' ";
    mysqli_query($mysqli, $consulta);
    
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('UPDATE','Se ha actualizado un registro en la tabla','usuarios','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");


?>

