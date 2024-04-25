document.addEventListener('DOMContentLoaded', function() {
  var boton = document.getElementById('botonEstado');
  boton.addEventListener('click', function() {
    fetch('../php/conexion.php', { // Ruta actualizada al nuevo nombre del archivo PHP
      method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
      alert('El botón está ' + (data.estado ? 'encendido' : 'apagado'));
      // Aquí puedes cambiar el estilo del botón según el estado si lo deseas
    })
    .catch(error => console.error('Error:', error));
  });
});
