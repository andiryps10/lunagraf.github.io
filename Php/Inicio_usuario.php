<?php

session_start();
include 'Conexion_reg.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo' and contrasena = '$contrasena'");
 
if(mysqli_num_rows($validar) > 0){
    $_SESSION['usuario']= $correo;
    header("location: ../Php/index.php");
    exit;
    
}else{
    echo ' <script>
          alert("Usuario no existe, por favor verifique los datos introducidos");
          window.location = "../Php/InicioSesion.php";
           </script>';
    exit;  
}

?>