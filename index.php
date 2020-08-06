<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
  if(isset($_GET["data"]))
  {
  ?>
    <p><? echo $_GET["data"]; ?></p>
  <?php
  }
  ?>
 
  <div class="login-form">
    <form action="acciones.php" method="post" class="my-5">
    <div class="avatar">
			<img src="IMG/user.png" alt="Avatar">
		</div>  
	        <h2 class="text-center">Login</h2>   
        <div class="form-group">
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
        	<input type="text" name ="usuario" id= "usuario" class="form-control"  placeholder="Email" required="required">
        </div>
        </div>
		<div class="form-group">
    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" name= "password" id="password" class="form-control" placeholder="Password" required="required">
        </div>        
		</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar</button>
        </div>
		
    </form>
</div>
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>