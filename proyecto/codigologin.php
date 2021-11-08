<?php 
session_start();
include "conexion.php";

if (isset($_POST['btn2'])) {

	$email = $_POST['email'];
	$psw = $_POST['psw'];


$consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$email' and contrasena = '$psw'") or die ($conexion."problemas de consulta");

if(mysqli_num_rows($consulta)>0){

$dato = mysqli_fetch_array($consulta);
	

$_SESSION['email'] = $dato['email'];

echo "<script>window.location='dashboard.php';</script>";
echo "Iniciando Sesiòn";

}else{
	echo "<script>alert('Email y/o contraseña incorrectas');</script>";
	echo "<script>window.location='inicio.php';</script>";
}

}

?>