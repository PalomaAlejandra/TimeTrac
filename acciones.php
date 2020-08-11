<?php
require_once 'conexion.php';
//recibir valores
//no esten vacios
// Que existan el usuario en la base de datos
//que la contraseña sea correcta
//iniciar seccion
//redireccionar

$usuario = $_POST["usuario"];
$password = $_POST["password"];
$respuesta = '';

if($usuario == '' && empty($password)){
    $respuesta = 'Estan vascios';
        header('Location: index.php?data=' . $respuesta);
}
    else
    {   
        $consulta = "SELECT * FROM usuarios WHERE correo_usr ='$usuario'";
        $resultado = mysqli_query($mysqli, $consulta);
        $fila = mysqli_fetch_array($resultado);
        $respuesta = '';
        if (sizeof($fila) > 0)
        {
            if($fila["password_usr"] == $password)
            {
                session_start();
                $_SESSION["id"] = $fila["id_usuario"];
                $_SESSION["nombre"] = $fila["nombre_usr"];
                $_SESSION["rol"]=$fila["roles_id_rol"];
                $respuesta = 1;
            }
            else
            {
                $respuesta = "No la contra esta mal";
            }
        }
        else
        {
            echo $respuesta = "El usaruio no existe por fa de verificarlo gracias" . $consulta;
        } 
            if($respuesta == 1)
            {
                header('Location: dashboard.php');
                
                
            } 
            else
            {
                header('Location: index.php?data='. $respuesta);
            } 
    }
?>