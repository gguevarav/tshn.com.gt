// Código JavaScript para formulario de contacto
const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Obtener valores de los campos del formulario
  const nombre = form.querySelector('#nombre').value.trim();
  const email = form.querySelector('#email').value.trim();
  const mensaje = form.querySelector('#mensaje').value.trim();

  // Validar que los campos no estén vacíos
  if (nombre === '' || email === '' || mensaje === '') {
    alert('Por favor complete todos los campos del formulario');
    return;
  }

  // Enviar datos del formulario mediante AJAX
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'enviar.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      alert('Gracias por contactarnos. Nos pondremos en contacto con usted lo antes posible.');
      form.reset();
    }
  };
  xhr.send(`nombre=${nombre}&email=${email}&mensaje=${mensaje}`);
});
