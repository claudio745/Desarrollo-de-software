<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Configuración</h1>
        <a href="javascript:history.back()" class="back-arrow">
            <img src="img/back-arrow.png" alt="Volver">
        </a>
    </div>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <button type="button" class="label-button">Notificaciones</button>
            </div>
            <div class="form-group">
                <button type="button" class="label-button">Privacidad</button>
            </div>
            <div class="form-group">
                <button type="button" class="label-button">Modo oscuro</button>
            </div>
            <div class="form-group">
                <button type="button" class="label-button">Tema</button>
            </div>
            <div class="form-group">
                <button type="button" class="label-button">Idioma</button>
            </div>
            <div class="button-group">
                <button type="submit" class="btn-registrarse">Guardar Cambios</button>
                <button type="button" class="btn-cancelar" onclick="window.location.href='Pinicio.php'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>