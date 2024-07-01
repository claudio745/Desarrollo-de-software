<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            margin: 0;
        }

        .sidebar {
            background-color: #ccc;
            width: 100px;
            height: 100vh;
        }

        .calendar-container {
            background-color: #fff;
            padding: 20px;
            margin: 0 20px;
            width: calc(100% - 240px); /* Ancho del contenedor restando los sidebars y márgenes */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .calendar-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .months {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .month {
            background-color: #e6e6e6;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar"></div>
    <div class="calendar-container">
        <div class="calendar-header">
            <h2>Calendario</h2>
        </div>
        <div class="months">
            <div class="month">Enero</div>
            <div class="month">Febrero</div>
            <div class="month">Marzo</div>
            <div class="month">Abril</div>
            <div class="month">Mayo</div>
            <div class="month">Junio</div>
            <div class="month">Julio</div>
            <div class="month">Agosto</div>
            <div class="month">Septiembre</div>
            <div class="month">Octubre</div>
            <div class="month">Noviembre</div>
            <div class="month">Diciembre</div>
        </div>
    </div>
    <div class="sidebar"></div>
</body>
</html>
