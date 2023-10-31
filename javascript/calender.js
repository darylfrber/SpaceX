document.addEventListener("DOMContentLoaded", function () {
    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    document.getElementById("previous-month-btn").addEventListener("click", function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        updateCalendar(currentMonth, currentYear);
    });

    document.getElementById("next-month-btn").addEventListener("click", function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendar(currentMonth, currentYear);
    });

    updateCalendar(currentMonth, currentYear);
});

function updateCalendar(month, year) {
    let calendarBody = document.getElementById("calendar-body");
    calendarBody.innerHTML = "";

    let date = new Date(year, month, 1);
    let startDay = date.getDay();
    if (startDay === 0) {
        startDay = 7;
    }

    let daysInMonth = new Date(year, month + 1, 0).getDate();
    let dateCounter = 1;

    let today = new Date();
    let currentDay = today.getDate();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    for (let row = 0; row < 6; row++) {
        let tableRow = document.createElement("tr");

        for (let col = 1; col <= 7; col++) {
            let tableCell = document.createElement("td");

            if (row === 0 && col < startDay) {
                tableCell.textContent = "";
            } else if (dateCounter > daysInMonth) {
                break;
            } else {
                tableCell.textContent = dateCounter;
                tableCell.addEventListener("click", function () {
                    let selectedDay = this.textContent;
                    let selectedDate = new Date(year, month, selectedDay);
                    let formattedDate = selectedDate.toDateString();
                    document.getElementById('geselecteerde-dag').innerText = formattedDate;
                    Number(selectedDay);
                    if (selectedDay < 10) {
                        selectedDay = "0" + selectedDay;
                    }
                    fetch('app/classes/vluchten_api.php?date=' + year + "-0" + (month + 1) + "-" + selectedDay)
                        .then(result => result.json())
                        .then(data => {
                            document.querySelector('#vluchten').innerHTML = "";
                            if (data.length != 0) {
                                data.forEach(vlucht => {
                                    const vluchten = document.querySelector("#vluchten");
                                    const template = document.querySelector('#vlucht-info');
                                    // Clone the new row and insert it into the table
                                    const clone = template.content.cloneNode(true);
                                    const box = clone.querySelector('#vlucht-box');
                                    p = clone.querySelectorAll("p");
                                    p[0].textContent = "Flight ID: " + vlucht.id;
                                    p[1].textContent = "Current Passengers: " + vlucht.passagiers + "/" + vlucht.raket.max_passagiers;
                                    p[1].id = "vlucht-passagiers-" + vlucht.id;
                                    p[2].textContent = "Departure Date: " + vlucht.vertrek_datum;
                                    p[3].textContent = "Arrival Date: " + vlucht.aankomst_datum;
                                    p[4].textContent = "Flight Type: " + vlucht.vlucht_type;
                                    p[5].textContent = "Departure Facility: " + vlucht.vertrek_faciliteit;
                                    p[6].textContent = "Destination Facility: " + vlucht.aankomst_faciliteit;

                                    const button = document.createElement('button');
                                    if (Number(vlucht.passagiers) < Number(vlucht.raket.max_passagiers) && vlucht.vlucht_type === "passenger") {
                                        button.className = "btn btn-success";
                                        button.innerText = "Book ticket";
                                        button.addEventListener("click", function () {
                                            if (Number(vlucht.passagiers) >= Number(vlucht.raket.max_passagiers)) {
                                                alert('The current rocket has no luxurious spaces left');
                                                exit();
                                            }
                                            vlucht.passagiers++;
                                            document.getElementById('vlucht-passagiers-' + vlucht.id).innerText = "Current Passengers: " + vlucht.passagiers + "/" + vlucht.raket.max_passagiers;

                                            // XMLHttpRequest-object maken
                                            var xhr = new XMLHttpRequest();

                                            // Verzoek naar het PHP-bestand sturen
                                            xhr.open("POST", "app/classes/vluchten_api.php", true);
                                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                            xhr.send("id=" + vlucht.id + "&teller=" + vlucht.passagiers);
                                        });
                                    } else {
                                        button.className = "btn btn-secondary";
                                        button.setAttribute('disabled', '');
                                        button.innerText = "No tickets available";
                                    }
                                    box.appendChild(button);


                                    vluchten.appendChild(clone);

                                });
                            }
                        });

                    let selectedDayCells = document.getElementsByClassName("bg-light");
                    for (let i = 0; i < selectedDayCells.length; i++) {
                        selectedDayCells[i].classList.remove("bg-light");
                    }

                    let selectedDayText = document.getElementsByClassName("text-dark");
                    for (let i = 0; i < selectedDayText.length; i++) {
                        selectedDayText[i].classList.remove("text-dark");
                    }

                    this.classList.add("bg-light");
                    this.classList.add("text-dark");
                });

                if (year === currentYear && month === currentMonth && dateCounter === currentDay) {
                    // Voeg CSS class toe
                    tableCell.classList.add("bg-light");
                    tableCell.classList.add("text-dark");
                    let currentDate = new Date(year, month, currentDay);
                    let formattedDate = currentDate.toDateString();
                    document.getElementById('geselecteerde-dag').innerText = formattedDate;

                    Number(currentDay);
                    if (currentDay < 10) {
                        currentDay = "0" + currentDay;
                    }
                    fetch('app/classes/vluchten_api.php?date=' + year + "-0" + (month + 1) + "-" + currentDay)
                        .then(result => result.json())
                        .then(data => {
                            document.querySelector('#vluchten').innerHTML = "";
                            if (data.length != 0) {
                                data.forEach(vlucht => {
                                    const vluchten = document.querySelector("#vluchten");
                                    const template = document.querySelector('#vlucht-info');
                                    // Clone the new row and insert it into the table
                                    const clone = template.content.cloneNode(true);
                                    const box = clone.querySelector('#vlucht-box');
                                    p = clone.querySelectorAll("p");
                                    p[0].textContent = "Flight ID: " + vlucht.id;
                                    p[1].textContent = "Current Passengers: " + vlucht.passagiers + "/" + vlucht.raket.max_passagiers;
                                    p[1].id = "vlucht-passagiers-" + vlucht.id;
                                    p[2].textContent = "Departure Date: " + vlucht.vertrek_datum;
                                    p[3].textContent = "Arrival Date: " + vlucht.aankomst_datum;
                                    p[4].textContent = "Flight Type: " + vlucht.vlucht_type;
                                    p[5].textContent = "Departure Facility: " + vlucht.vertrek_faciliteit;
                                    p[6].textContent = "Destination Facility: " + vlucht.aankomst_faciliteit;

                                    const button = document.createElement('button');
                                    if (Number(vlucht.passagiers) < Number(vlucht.raket.max_passagiers) && vlucht.vlucht_type === "passenger") {
                                        button.className = "btn btn-success";
                                        button.innerText = "Book ticket";
                                        button.addEventListener("click", function () {
                                            if (Number(vlucht.passagiers) >= Number(vlucht.raket.max_passagiers)) {
                                                alert('The current rocket has no luxurious spaces left');
                                                exit();
                                            }
                                            vlucht.passagiers++;
                                            document.getElementById('vlucht-passagiers-' + vlucht.id).innerText = "Current Passengers: " + vlucht.passagiers + "/" + vlucht.raket.max_passagiers;

                                            // XMLHttpRequest-object maken
                                            var xhr = new XMLHttpRequest();

                                            // Verzoek naar het PHP-bestand sturen
                                            xhr.open("POST", "app/classes/vluchten_api.php", true);
                                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                            xhr.send("id=" + vlucht.id + "&teller=" + vlucht.passagiers);
                                        });
                                    } else {
                                        button.className = "btn btn-secondary";
                                        button.setAttribute('disabled', '');
                                        button.innerText = "No tickets available";
                                    }
                                    box.appendChild(button);


                                    vluchten.appendChild(clone);

                                });
                            }
                        });
                }
                dateCounter++;
            }

            tableRow.appendChild(tableCell);
        }

        calendarBody.appendChild(tableRow);
    }

    document.getElementById("current-month-year").innerHTML = '<i class="fa-solid fa-calendar-days"></i> ' + getMonthName(month) + " " + year;
}

function getMonthName(month) {
    let monthNames = ["January", "February", "March", "April", "May", "Juny", "Juli", "Augustus", "September", "October", "November", "December"];
    return monthNames[month];
}
