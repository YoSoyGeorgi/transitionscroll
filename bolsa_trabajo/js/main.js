// Obtiene la vacante seleccionada
var vacante = document.querySelector('.list-group li.active a');

// Muestra los detalles de la vacante
var vacanteDetalle = document.querySelector('.vacante-detalle');
vacanteDetalle.innerHTML = vacante.textContent;
