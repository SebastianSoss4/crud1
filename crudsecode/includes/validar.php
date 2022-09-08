<?php
$conexion=mysqli_connect("localhost", "root", "", "id16455213_secode_qr");

if(isset($_POST['registrar'])){

    if(strlen($_POST['documento'])>=1 && strlen($_POST['Nombre'])>=1 && strlen($_POST['Direccion'])>=1
     && strlen($_POST['Genero'])>=1 && strlen($_POST['Correo'])>=1  && strlen($_POST['FechaNacimiento'])>=1 && strlen($_POST['Telefono'])>=1){

        $documento = trim($_POST['documento']);
        $Nombre = trim($_POST['Nombre']);
        $Direccion = trim($_POST['Direccion']);
        $Genero = trim($_POST['Genero']);
        $Correo = trim($_POST['Correo']);
        $FechaNacimiento = trim($_POST['FechaNacimiento']);
        $Telefono = trim($_POST['Telefono']);
       
        $consulta="INSERT INTO usuario (documento, Nombre, Direccion, Genero, Correo, FechaNacimiento, Telefono) VALUES ('$documento','$Nombre','$Direccion','$Genero','$Correo','$FechaNacimiento','$Telefono')";

        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);

        header('location: ../views/tablero.php');
     }
      }
?>