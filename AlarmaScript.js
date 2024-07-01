// scripts.js
document.getElementById('activar-alarma-form').addEventListener('submit', function(event) {
    var codigoAlarma = document.getElementById('alarma').value;
    if (codigoAlarma.trim() === '') {
        alert('El código de alarma es obligatorio.');
        event.preventDefault();
    }
});