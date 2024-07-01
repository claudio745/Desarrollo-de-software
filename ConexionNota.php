<!-- nota.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    
    if (empty($titulo) || empty($contenido)) {
        echo "El título y el contenido no pueden estar vacíos.";
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
    
    // Insertar la nota en la base de datos
    $sql = "INSERT INTO notas (titulo, contenido) VALUES ('$titulo', '$contenido')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nota añadida exitosamente con el título: " . htmlspecialchars($titulo);
    } else {
        echo "Error al añadir la nota: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>