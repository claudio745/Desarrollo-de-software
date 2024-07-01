<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Añadir Nota de Organización</title>
    <link rel="stylesheet" href="NotaStyle.css">
</head>
<body>
    <h1>Añadir Nota de Organización</h1>
    <form id="añadir-nota-form" method="POST" action="ConexionNota.php">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required></textarea>
        <br>
        <button type="submit">Añadir Nota</button>
    </form>
    <script src="NotaScript.js"></script>
</body>
</html>