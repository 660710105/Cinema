const seatTableContainer = document.getElementById('bookedTable');
const sortBySelect = document.getElementById('sortBy');
const cinemaSelect = document.getElementById('cinema');
const applyFiltersButton = document.getElementById('applyFilters');

let currentSortBy = 'SeatID';
let currentCinema = 'all';

async function loadSeatData(sortBy = 'SeatID', cinema = 'all') {
    try {
        const response = await fetch(`./includes/getBookedSeat.php?sortBy=${sortBy}&cinema=${cinema}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = (await response.json()).result;
        displaySeats(data);
    } catch (error) {
        console.error('Error fetching data:', error);
        seatTableContainer.textContent = 'Failed to load seat data.';
    }
}

function displaySeats(seats) {
    seatTableContainer.innerHTML = '';
    if (Array.isArray(seats) && seats.length > 0) {
        const table = document.createElement('table');
        const thead = document.createElement('thead');
        const tbody = document.createElement('tbody');
        const headerRow = document.createElement('tr');
        const columns = Object.keys(seats[0]);

        columns.forEach(column => {
            const th = document.createElement('th');
            th.textContent = column.toUpperCase();
            headerRow.appendChild(th);
        });
        const actionHeader = document.createElement('th');
        actionHeader.textContent = 'ACTION';
        headerRow.appendChild(actionHeader);

        thead.appendChild(headerRow);
        table.appendChild(thead);

        seats.forEach(user => {
            const row = document.createElement('tr');
            columns.forEach(column => {
                const td = document.createElement('td');
                td.textContent = user[column];
                row.appendChild(td);
            });

            const actionsCell = row.insertCell();
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.classList.add('delete');
            deleteButton.addEventListener('click', () => deleteBooked(user.cinema_id, user.seat_id));
            actionsCell.appendChild(deleteButton);
            row.appendChild(actionsCell);

            tbody.appendChild(row);
        });

        table.appendChild(tbody);
        seatTableContainer.appendChild(table);
    } else if (seats && seats.message) {
        seatTableContainer.textContent = seats.message;
    } else {
        seatTableContainer.textContent = 'No seat data available.';
    }
}

async function deleteBooked(CinemaID, SeatId) {
    if (confirm("Are you sure you want to delete this seat?")) {
        try {
            const response = await fetch('./includes/deleteBookedSeat.php', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    cinemaId: CinemaID,
                    seatId: SeatId
                }),
            });

            const data = await response.json();
            console.log("PHP Response:", data);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            console.log(data);
            alert("Booking deleted!");
            loadSeatData(currentSortBy, currentCinema); // Reload with current filters
        } catch (error) {
            console.error('Error:', error);
            alert("Error deleting booking.");
        }
    }
}

// Event listeners for filtering and sorting
applyFiltersButton.addEventListener('click', () => {
    currentSortBy = sortBySelect.value;
    currentCinema = cinemaSelect.value;
    loadSeatData(currentSortBy, currentCinema);
});

window.onload = () => loadSeatData();