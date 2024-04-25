<?php
// Configuración de la conexión a la base de datos
$host = 'sql203.infinityfree.com';
$usuario = 'si0_36432266'; // Reemplaza con tu nombre de usuario real
$contraseña = 'UA7q1zUHMrI4'; // Reemplaza con tu contraseña real
$baseDeDatos = 'if0_36432266_bd001';

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die('Conexión fallida: ' . $conexion->connect_error);
}

// Consultar el estado del botón con id 1
$sql = "SELECT estado FROM boton WHERE id = 1";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Obtener datos y enviar como JSON
    $fila = $resultado->fetch_assoc();
    echo json_encode(['estado' => $fila['estado']]);
} else {
    // Enviar estado falso si no hay resultados
    echo json_encode(['estado' => false]);
}

// Cerrar conexión
$conexion->close();
?>
