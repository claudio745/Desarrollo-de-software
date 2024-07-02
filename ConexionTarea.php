<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $crea_tarea = $_POST['Crear-Tarea'];
    
    // Validar que el código no esté vacío
    if (empty($crea_tarea)) {
        echo "No se han creado tareas.";
        exit;
    }
    
    $servername = "localhost";
    $nombre_usuario = "root";
    $password = "";
    $nombre_bd = "";
    // Create connection
    $conn = mysqli_connect($servername, $nombre_usuario, $password,$nombre_bd);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Insertar el código de alarma en la base de datos
    $sql="INSERT INTO `tareas`(`Titulo`) VALUES ('$crea_tarea')";
    
    if ($conn->query($sql) === TRUE)
    {
        echo "dato ingresados";
    }
else
    {
        echo "error al ingresar los datos";
    }
    
    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>