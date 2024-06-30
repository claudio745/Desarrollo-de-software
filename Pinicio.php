<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="side-line left"></div>
    <div class="side-line right"></div>

    <header>
        <h1>Inicio</h1>
        <button class="menu-button">&#9776;</button>
        <div class="dropdown-menu">
            <label for="calendario">
                <input type="radio" id="calendario" name="menu" value="calendario">
                Calendario
            </label><br>
            <label for="perfil">
                <input type="radio" id="perfil" name="menu" value="perfil">
                Perfil de usuario
            </label><br>
            <label for="alarmas">
                <input type="radio" id="alarmas" name="menu" value="alarmas">
                Alarmas
            </label><br>
            <label for="tareas">
                <input type="radio" id="tareas" name="menu" value="tareas">
                Tareas
            </label><br>
            <label for="configuracion">
                <input type="radio" id="configuracion" name="menu" value="configuracion">
                Configuración
            </label>
        </div>
    </header>

    <main>
        <div class="welcome-box">
            <p>Bienvenido a la pagina de inicio, en el menu de la parte de arriba a la izquierda encontraras las funcionalidades de la aplicación, Saludos.</p>
        </div>
    </main>

    <script>
        document.querySelector('.menu-button').addEventListener('click', function() {
            document.querySelector('.dropdown-menu').classList.toggle('show');
        });

        document.querySelectorAll('.dropdown-menu input[type="radio"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                switch (radio.value) {
                    case 'calendario':
                        window.location.href = 'calendario.php';
                        break;
                    case 'perfil':
                        window.location.href = 'perfil.php';
                        break;
                    case 'alarmas':
                        window.location.href = 'alarmas.php';
                        break;
                    case 'tareas':
                        window.location.href = 'tareas.php';
                        break;
                    case 'configuracion':
                        window.location.href = 'configuracion.php';
                        break;
                }
            });
        });
    </script>
</body>
</html>
