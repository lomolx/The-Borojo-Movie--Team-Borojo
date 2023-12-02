<?php
session_start();
#1 Establecer la conexión con la base 
$conexion = mysqli_connect("localhost","root","","tbm");
$oe= $_POST['correo'];

#2Verificar conexión 
if (!$conexion) {
    echo "error conexión". mysqli_connect_error();
    exit();
}
#3 Crear comando sql 
$sql = "select contraseña, nombres, apellidos  from usuarios where correo='".$_POST['correo']."'";
#4 Ejecutar 
$resultado = mysqli_query($conexion, $sql);
#4.1 Organizar datos
$row = mysqli_fetch_assoc($resultado);

#5 Verificar ejecución
if ($row) {
    #verificar la contraseña
    $verificar_contraseña = password_verify($_POST['contrasena'], $row['contraseña']);
    if ($verificar_contraseña==true) {
        #aquí debe redigir a la otra actividad
       $_SESSION['nombreusuario'] = $row['nombres']." ".$row[ 'apellidos'];
       # $_SESSION['sesion'] == true;
       header("Location:../frontend/index2.php");
      
    } else {
       // header("Location:login.php?error=1");
       echo "no manito";
    }
    
 }else{
    echo "Hubo un error: ". mysqli_error($conexion);
 }

?>