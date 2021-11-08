<?php 
session_start();

if (isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h2>Inicio de sesion con exito...</h2>
</body>
</html>

<?php
/* De lo contrario si el usuario intenta acceder al sistema después de un tiempo
se le pedira que inicie sesión de nuevo. */
} else {
    echo "<script>alert('Debe iniciar sesion');</script>";
    echo "<script>window.location='inicio.php';</script>";
}
?>