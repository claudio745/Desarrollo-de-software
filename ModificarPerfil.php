<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Perfil de Usuario</title>
    <link rel="stylesheet" href="ModificarPstyle.css">
</head>
<body>
    <h1>Modificar Perfil de Usuario</h1>
    <form id="modificar-perfil-form" method="POST" action="ConexionModificar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>
    <script src="ModificarPScript.js"></script>
</body>
</html>
