document.addEventListener('DOMContentLoaded', () => {
    const screen = document.getElementById('bookBoard');
    const bookButton = document.getElementById('book');
    const seatsArray = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
    let bookSeat = []; // Use let as it will be reassigned

    async function loadSeatData() {
        try {
            const response = await fetch("./includes/getSeatCinema2.php");
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            bookSeat = data['result'] || [];
            renderSeats();
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    // Call loadSeatData immediately when the DOM is ready
    loadSeatData();

    function isInData(value) {
        for (const seat of bookSeat) {
            if (seat && seat.seat_id == value) { // Assuming your database returns 'SeatID'
                return true;
            }
        }
        return false;
    }

    function createSeat(value) {
        const seat = document.createElement('div');
        seat.classList.add('seat');
        seat.dataset.value = value;
        seat.textContent = value;
        if (isInData(value)) {
            seat.classList.add('booked');
        }
        seat.addEventListener('click', () => {
            const selectedSeats = document.querySelectorAll('.seat.selected');
            if (seat.classList.contains('booked')) {
                alert('This seat is already booked!');
            } else if (selectedSeats.length >= 6) {
                alert('Maximum 6 seats!');
            } else {
                seat.classList.toggle('selected');
            }
        });
        return seat;
    }

    function renderSeats() {
        if (!screen) return; // Ensure screen element exists
        
        seatsArray.forEach((row) => {
            for (let i = 0; i < 8; i++) {
                const seatIdentifier = row + (i + 1);
                const seat = createSeat(seatIdentifier);
                screen.appendChild(seat);
            }
        });
    }

    async function fetchBookedSeats(selectedSeats) {
        try {
            const seatValues = Array.from(selectedSeats).map(seat => seat.dataset.value);
            const response = await fetch("./includes/bookSeatsCinema2.php", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ seats: seatValues }),
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(`Failed to book seats: ${response.status} - ${errorData.message || 'Unknown error'}`);
            }

            const result = await response.json();
            if (result.success) {
                selectedSeats.forEach(seat => {
                    seat.classList.add('booked');
                    seat.classList.remove('selected');
                });
                alert('Seats booked successfully!');
                window.location.reload();
            } else {
                alert(`Booking failed: ${result.message || 'Something went wrong.'}`);
            }

        } catch (error) {
            console.error('Error booking seats:', error);
            alert(`Failed to book seats: ${error.message}`);
        }
    }

    bookButton.addEventListener('click', () => {
        const selectedSeats = document.querySelectorAll('.seat.selected');
        if (selectedSeats.length > 6) {
            alert('Selected seats should be less than or equal to 6');
        } else if (selectedSeats.length > 0) {
            fetchBookedSeats(selectedSeats);
        } else {
            alert('Please select at least one seat.');
        }
    });

});