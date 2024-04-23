// Obtener la fecha actual
const fechaActual = new Date();
const añoActual = fechaActual.getFullYear();
const mesActual = fechaActual.getMonth();

generarCalendario(añoActual, mesActual);
console.log('año 2', añoActual, 'mes 2', mesActual);

// Calcular el primer y último día del mes
function primerDiaMes(año, mes) {
  return new Date(año, mes, 1);
}

function ultimoDiaMes(año, mes) {
  return new Date(año, mes + 1, 0);
}

// Generar la cuadrícula del calendario
function generarCalendario(año, mes) {
  console.log('generarCalendario')
  const primerDia = primerDiaMes(año, mes);
  const diaSemana = primerDia.getDay(0); // 0: domingo, 1: lunes, etc.
  const ultimoDia = ultimoDiaMes(año, mes);
  const totalDias = ultimoDia.getDate(6);

  let html = '';

  // Fila para los días de la semana
  html += '<div class="fila-dia-semana">';
  for (let i = 0; i < 7; i++) {
    html += '<span>' + diasSemana[(i + diaSemana) % 7] + '</span>';
  }
  html += '</div>';
  console.log('html 1', html);
  // Filas para los días del mes
  let contadorDia = 1;
  for (let i = 0; i < 6; i++) {
    html += '<div class="fila-dia">';
    for (let j = 0; j < 7; j++) {
      const dia = contadorDia;
      const fecha = new Date(año, mes, dia);
      const esDiaActual = fecha.getDate() === fechaActual.getDate() && fecha.getMonth() === fechaActual.getMonth() && fecha.getFullYear() === fechaActual.getFullYear();
      const esFinDeSemana = diaSemana === 0 || diaSemana === 6;

      html += `<span class="${esDiaActual ? 'dia-actual' : ''} <span class="math-inline">\{esFinDeSemana ? 'fin\-de\-semana' \: ''\}" data\-fecha\="</span>{fecha.toISOString()}">${dia}</span>`;
      contadorDia++;

      if (contadorDia > totalDias) {
        break;
      }
    }
    html += '</div>';
  }
  console.log('html', html)
  document.getElementById('dias-mes').innerHTML = html;
}

// Marcar el día actual
function marcarDiaActual() {
  const dias = document.querySelectorAll('.dia-actual');
  if (dias.length > 0) {
    dias[0].classList.add('seleccionado');
  }
}

// Capturar la selección del día
document.addEventListener('click', (e) => {
  if (e.target.classList.contains('dia')) {
    const fechaSeleccionada = new Date(e.target.dataset.fecha);

    // Almacenar la fecha seleccionada (ejemplo usando localStorage)
    localStorage.setItem('fechaSeleccionada', fechaSeleccionada.toISOString());

    // Actualizar la interfaz (opcional)
    const fechaTexto = document.getElementById('fecha-seleccionada');
    if (fechaTexto) {
      fechaTexto.textContent = fechaSeleccionada.toLocaleDateString(); // Formato de fecha personalizado
    }

    // Eliminar la selección previa (opcional)
    const diaSeleccionado = document.querySelector('.dia.seleccionado');
    if (diaSeleccionado) {
      diaSeleccionado.classList.remove('seleccionado');
    }

    // Agregar la clase de selección al día actual
    e.target.classList.add('seleccionado');
  }
});

const btnAnterior = document.getElementById('anterior');
const btnSiguiente = document.getElementById('siguiente');

btnAnterior.addEventListener('click', () => {
  mesActual--;
  if (mesActual < 0) {
    mesActual = 11;
    añoActual--;
  }
  generarCalendario(añoActual, mesActual);
});

btnSiguiente.addEventListener('click', () => {
  mesActual++;
  if (mesActual > 11) {
    mesActual = 0;
    añoActual++;
  }
  generarCalendario(añoActual, mesActual);
});

