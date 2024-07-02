<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de usuario</title>
    <style>
        /* Estilos para el header */
        header {
            background-color: #800080; /* Color morado */
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 24px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        /* Ajuste de estilos para el contenido */
        body {
            margin-top: 60px; /* Para evitar que el contenido se oculte debajo del header */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f2f2f2;
        }

        h1.header-title {
            flex-grow: 1;
            text-align: center;
            margin: 0;
            color: white; /* Texto "Perfil de usuario" en blanco */
        }

        .form-container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            width: 300px;
            text-align: left;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .menu-container {
            display: flex;
            align-items: center;
        }

        .menu-button, .back-arrow {
            background: none;
            border: none;
            color: white;
            font-size: 16px; /* Tamaño reducido para el menú */
            cursor: pointer;
            margin-right: 10px;
        }

        .back-arrow img {
            width: 20px;
            height: 20px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 50px;
            left: 10px;
            background-color: #fff;
            color: #000;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            font-size: 14px; /* Tamaño reducido para el menú desplegado */
        }

        .dropdown-menu label {
            display: block;
            margin-bottom: 5px;
        }

        .menu-button:focus + .dropdown-menu,
        .dropdown-menu:hover {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="menu-container">
            <button class="menu-button" onclick="toggleMenu()">&#9776;</button>
            <a href="javascript:history.back()" class="back-arrow">
                <img src="img/back-arrow.png" alt="Volver">
            </a>
            <div class="dropdown-menu" id="dropdown-menu">
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
                </label><br>
                <label for="Notas">
                    <input type="radio" id="Notas" name="menu" value="Notas">
                    Notas
                </label>
            </div>
        </div>
        <h1 class="header-title">Perfil de usuario</h1>
    </header>

    <div class="form-container">
        <form id="perfil-usuario-form">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </form>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('dropdown-menu');
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }
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
                        window.location.href = 'alarma.php';
                        break;
                    case 'tareas':
                        window.location.href = 'tareas.php';
                        break;
                    case 'configuracion':
                        window.location.href = 'configuracion.php';
                        break;
                    case 'Notas':
                        window.location.href = 'NotaOrganizacion.php';
                        break;
                }
            });
        })
    </script>
</body>
</html>
