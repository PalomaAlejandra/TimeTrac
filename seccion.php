
<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location:///localhost/timeTrac/index.php")
    ///localhost/ProyectoDB/index.php"
   
?>