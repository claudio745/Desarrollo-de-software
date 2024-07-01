var saveTimer; // Variable global para el temporizador de guardado

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('input[type="text"]').forEach(function(input) {
        input.addEventListener('input', function() {
            clearTimeout(saveTimer); // Reinicia el temporizador en cada cambio de entrada
            saveTimer = setTimeout(function() {
                document.getElementById('configForm').submit(); // Envía el formulario después de 15 minutos de inactividad
            }, 15 * 60 * 1000); // 15 minutos en milisegundos (15 minutos * 60 segundos * 1000 milisegundos)
        });

        input.addEventListener('blur', function() {
            clearTimeout(saveTimer); // Reinicia el temporizador si el usuario sale del campo antes de que expire el temporizador
            saveTimer = setTimeout(function() {
                document.getElementById('configForm').submit(); // Envía el formulario después de 15 minutos de inactividad
            }, 15 * 60 * 1000); // 15 minutos en milisegundos (15 minutos * 60 segundos * 1000 milisegundos)
        });
    });
});
