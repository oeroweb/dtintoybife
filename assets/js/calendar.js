// script.js
const now = new Date();
console.log('Dia actual:', now);
let currentMonth = now.getMonth();
let currentYear = now.getFullYear();
const horaActual = now.getHours();
const minutosActuales = now.getMinutes();

console.log('mes:', currentMonth, ' - year:', currentYear );
const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

const monthYear = document.getElementById("month-year");
const calendarBody = document.getElementById("calendar-body");

function showCalendar(month, year) {
    const firstDay = new Date(year, month).getDay();
    calendarBody.innerHTML = "";

    monthYear.textContent = `${monthNames[month]}`;

    let date = 1;
    for (let i = 0; i < 6; i++) {
      let row = document.createElement("tr");

			for (let j = 0; j < 7; j++) {
				if (i === 0 && j < firstDay) {
						let cell = document.createElement("td");
						row.appendChild(cell);
				} else if (date > daysInMonth(month, year)) {
						break;
				} else {
					let cell = document.createElement("td");
					cell.textContent = date;
					if (date === now.getDate() && year === now.getFullYear() && month === now.getMonth()) {
							cell.classList.add("bg-info");
					}
					
					(function(currentDate, currentMonth, currentYear) {
						cell.addEventListener("click", function() {
							console.log(`Seleccionaste el día ${currentDate} de ${monthNames[currentMonth]}, ${currentYear}`);
							document.getElementById("selectedDate").value = `${currentYear}-${currentMonth + 1}-${currentDate}`
							document.getElementById("selectedDay").value = `${currentDate}`
						});
				})(date, month, year);
					row.appendChild(cell);
					date++;
				}
			}
			calendarBody.appendChild(row);
    }
}

function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}

document.getElementById("prev-month").addEventListener("click", () => {
    if (currentMonth === 0) {
        currentMonth = 11;
        currentYear--;
    } else {
        currentMonth--;
    }
    showCalendar(currentMonth, currentYear);
});

document.getElementById("next-month").addEventListener("click", () => {
    if (currentMonth === 11) {
        currentMonth = 0;
        currentYear++;
    } else {
        currentMonth++;
    }
    showCalendar(currentMonth, currentYear);
});

showCalendar(currentMonth, currentYear);
