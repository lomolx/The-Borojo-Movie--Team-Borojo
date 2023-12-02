<?php 
$conexion = mysqli_connect("localhost","root","","tbm");
if (!$conexion) {
    echo "error conexión". mysqli_connect_error();
    exit();
}

#VERIFICAMOS SI LAS CONTRASEÑAS COINCIDEN
if ($_POST['contraseña'] != $_POST['contraseña2']) {
 
    header("Location: ../frontend/pages/registro.php?e=1");
 } else {
    #ENCRIPTAR LA CONTRASEÑA
 $contraseña_encriptada = password_hash($_POST['contraseña2'], PASSWORD_DEFAULT);
 
 #3 Crear comando sql 
 $sql = "insert into usuarios(documento,nombres,apellidos,fecha,correo,telefono,contraseña,fechar) values 
 ('".$_POST['nombre']."',
 '".$_POST['apellido']."',
 '".$_POST['documento']."',
 '".$_POST['fecha']."',
 '".$_POST['email']."',
 '".$_POST['phone']."',
  '".$contraseña_encriptada."',
  '".date('Y-m-d')."')";
 
 #4 Ejecutar 
 $resultado =mysqli_query($conexion, $sql);
 echo mysqli_error($conexion);
 
 #5 Verificar ejecución
  if ($resultado) {
    // echo "Se guardó la información";
     header("Location: ../frontend/index2.php");
     #aquí debe redigir a la otra actividad
  }else{
     echo "Hubo un error: ". mysqli_error($conexion);
  }
 }
/*
$nombre = $_POST['nombre'];
$apellido =$_POST['apellido'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fecha_de_nacimiento = $_POST['fecha'];
$contraseña1 = $_POST['contraseña'];
$contraseña2 = $_POST['contraseña2'];*/