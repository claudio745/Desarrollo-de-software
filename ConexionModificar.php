<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    if (empty($nombre) || empty($email)) {
        echo "El nombre y el email no pueden estar vacíos.";
        exit;
    }

    // Conexión a la base de datos (ejemplo)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";
    
    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Actualizar el perfil del usuario en la base de datos
    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Perfil actualizado exitosamente.";
    } else {
        echo "Error al actualizar el perfil: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>