<?php

include 'conexion.php';

if(isset($_POST['registrar'])){ //Presionar el boton
    //Traer los datos del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST ['usuario'];
    $email = $_POST ['email'];
    $clave = $_POST ['clave'];
    // $clave = sha1($clave);

    if($clave == $clave) { //Validación de las contraseñas , si son iguales o no a las registradas en la BD
        //Se inserta en la BD los datos procpocionados por el usuario 
        $conexion = mysqli_query ($conexion,"INSERT INTO usuarios (nombre, usuario, email, contrasena) VALUES ('$nombre', '$usuario','$email','$clave') ") or die ($conexion."Ocurrio un problema al registrarse");
        //Alertas en dado caso que el registro sea exitoso, 
        //Se direcciona hacia el inicio de sesión
        echo "<script>alert('Registro exitoso');</script>";
        echo "<script>window.location.href='inicio.php';</script>";

    }else{

        //En caso de que las contraseñas no sean las mismas le sacara una alerta advirtiendole.

        echo "<script>alert('Hubo un error al validar el usuario, verifique por favor.');</script>";
        echo "<script>window.location.href='ingresar_usuario.html';</script>";

    }
}
