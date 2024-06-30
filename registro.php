<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Registro De Usuario</h1>
    </div>
    <div class="container">
        <div class="sidebar sidebar-left">
            <a href="javascript:history.back()" class="back-arrow">
                <img src="img/back-arrow.png" alt="Volver">
            </a>
        </div>
        <div class="image-container">
            <div class="logo-square">
                <img src="img/logo.jpeg" alt="Logo de la empresa">
            </div>
        </div>
        <div class="form-container">
            <?php
                $error = '';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $correo = $_POST['correo'];
                    $clave = $_POST['clave'];
                    $confirmar_clave = $_POST['confirmar-clave'];
                    
                    if ($clave !== $confirmar_clave) {
                        $error = 'Las claves no coinciden. Por favor, inténtelo de nuevo.';
                    } else {
                        // Aquí puedes procesar el formulario (guardar en la base de datos, etc.)
                        echo 'Registro exitoso.';
                    }
                }
            ?>
            <form method="post" action="">
                <?php if ($error): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="clave">Clave:</label>
                    <input type="password" id="clave" name="clave" required>
                </div>
                <div class="form-group">
                    <label for="confirmar-clave">Confirmar Clave:</label>
                    <input type="password" id="confirmar-clave" name="confirmar-clave" required>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn-registrarse">Registrarse</button>
                    <button type="button" class="btn-cancelar" onclick="window.location.href='index.php'">Cancelar</button>
                </div>
            </form>
        </div>
        <div class="sidebar sidebar-right">
            <!-- Aquí puedes agregar contenido adicional para la barra lateral derecha -->
        </div>
    </div>
</body>
</html>
