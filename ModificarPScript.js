document.getElementById('modificar-perfil-form').addEventListener('submit', function(event) {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    if (nombre.trim() === '' || email.trim() === '') {
        alert('El nombre y el email son obligatorios.');
        event.preventDefault();
    }
});