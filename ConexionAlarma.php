<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir el código de alarma desde el formulario
    $codigo_alarma = $_POST['codigo_alarma'];
    
    // Validar que el código no esté vacío
    if (empty($codigo_alarma)) {
        echo "El código de alarma no puede estar vacío.";
        exit;
    }

    // Aquí se puede incluir la lógica para activar la alarma
    // Por ejemplo, almacenar el código en una base de datos
    // o enviar una señal a un sistema de alarma.
    
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
    
    // Insertar el código de alarma en la base de datos
    $sql = "INSERT INTO alarmas (codigo) VALUES ('$codigo_alarma')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Alarma activada exitosamente con el código: " . htmlspecialchars($codigo_alarma);
    } else {
        echo "Error al activar la alarma: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>
