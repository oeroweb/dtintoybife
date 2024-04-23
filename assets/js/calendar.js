// script.js
const now = new Date();
let currentMonth = now.getMonth();
let currentYear = now.getFullYear();
const horaActual = now.getHours();
const minutosActuales = now.getMinutes();
console.log('Dia actual:', now);

const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let blockedDays = ['2024-4-15', '2024-4-14'];
const blockedWeekdays = [2];

const monthYear = document.getElementById("month-year");
const calendarBody = document.getElementById("calendar-body");

function isBlocked(date, month, year) {
	let fullDate = `${year}-${month + 1}-${date}`;
	return blockedDays.includes(fullDate);
}

function showCalendar(month, year) {
    const firstDay = new Date(year, month).getDay();
    calendarBody.innerHTML = "";

    monthYear.textContent = `${monthNames[month]}`;

    let date = 1;
    for (let i = 0; i < 6; i++) {
      let row = document.createElement("tr");

			for (let j = 0; j < 7; j++) {
				if (i === 0 && j < firstDay) {
					row.appendChild(document.createElement("td"));
				} else if (date > daysInMonth(month, year)) {
						break;
				} else {
					let cell = document.createElement("td");
					let currentDate = new Date(year, month, date);
					cell.textContent = date;
					if (isBlocked(date, month, year) || blockedWeekdays.includes(currentDate.getDay())) {
						cell.classList.add("blocked");
					} else {
						(function(currentDate, currentMonth, currentYear) {
							cell.addEventListener("click", function() {
								console.log(`Seleccionaste el día ${currentDate} de ${monthNames[currentMonth]}, ${currentYear}`);
								document.getElementById("selectedDate").value = `${currentYear}-${currentMonth + 1}-${currentDate}`
								document.getElementById("selectedDay").value = `${currentDate}`
							});
						})(date, month, year);
					}

					if (date === now.getDate() && year === now.getFullYear() && month === now.getMonth()) {
							cell.classList.add("bg-info");
					}
					
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
