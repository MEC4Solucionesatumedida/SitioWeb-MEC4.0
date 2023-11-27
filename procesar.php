<?php
// procesar.php

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "c");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
        $telefono= $_POST['telefono'];
        $ayuda= $_POST['ayuda'];
        $cargo=$_POST['cargo'];
        $nombre_empresa=$_POST['nombre_empresa'];      
// Recibe más datos según sea necesario

// Preparar la consulta SQL e insertar datos en la base de datos
$consulta = "INSERT INTO persona (nombre, email, telefono) VALUES ('$nombre', '$email','$telefono')";
$consulta1="INSERT INTO servicios(ayuda,cargo, nombre_empresa) VALUES('$ayuda', '$cargo','$nombre_empresa')";
// Modifica la consulta según tu estructura de base de datos

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta1)=== TRUE) {
   

} else {
    echo '<script>';
    echo 'alert("Error al insertar datos: ' . $conexion->error . '");';
    echo '</script>';
}


// Cerrar la conexión
$conexion->close();
?>