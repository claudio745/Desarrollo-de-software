<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activar Alarma</title>
    <link rel="stylesheet" href="AlarmaStyle.css">
</head>
<body>
    <h1>Activar Alarma</h1>
    <form id="activar-alarma-form" method="POST" action="ConexionAlarma.php">
        <label for="alarma">Código de Alarma:</label>
        <input type="text" id="alarma" name="codigo_alarma" required>
        <button type="submit">Activar</button>
    </form>
    <script src="AlarmaScript.js"></script>
</body>
</html>