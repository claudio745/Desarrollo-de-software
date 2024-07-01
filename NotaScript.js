// scripts.js
document.getElementById('añadir-nota-form').addEventListener('submit', function(event) {
    var titulo = document.getElementById('titulo').value;
    var contenido = document.getElementById('contenido').value;
    if (titulo.trim() === '' || contenido.trim() === '') {
        alert('El título y el contenido son obligatorios.');
        event.preventDefault();
    }
});