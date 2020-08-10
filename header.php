<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    <?php require_once 'conexion.php';

session_start();
$bloqueo = $_SESSION['nombre'];

if($bloqueo == null || $bloqueo = '')
{
  header("Location:///localhost/timeTrac/index.php");
  
  
  die();
}
 ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" ><i class="fas fa-calendar-alt" style="color:#669ed2; font-size:30px "  ></i> Time tranking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\timeTrac/header.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/timeTrac/Usuarios/">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\timeTrac\Status" >Estatus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\timeTrac\Permisos" >Permisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "href="\timeTrac\Proyectos" >Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\timeTrac\Tareas" >Tareas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\timeTrac\Detalle" >Detalles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\timeTrac\Logs" >Logs</a>
      </li>
    </ul>
    <form class="form-inline mb--1 mr-sm-3">
    <h6 class="usr text-success">Bienvenido: <?php print_r($_SESSION['nombre'])?></h6>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <a href="\timeTrac/seccion.php" class="btn btn-outline-danger my-2 my-sm-0">Cerrar Sesión</a>   
    </form>
  </div>
</nav>

</div>
   
       
        
       
     <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/113ad682b8.js" crossorigin="anonymous"></script>

    </body>
</html>