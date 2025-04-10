document.addEventListener('DOMContentLoaded', function() {
    const editPopupWrapper = document.querySelector('.edit-popup-wrapper');
    const editCloseBtn = document.querySelector('.edit-close-btn');
    const editBtns = document.querySelectorAll('.edit-btn');
    const editFormContainer = document.querySelector('.form-box.edit-form'); // Container for the form

    editBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const showtimeId = this.dataset.id;

            fetch(`showtime_edit_form.php?id=${showtimeId}`)
                .then(response => response.text())
                .then(data => {
                    editFormContainer.innerHTML = `<h2>Edit Showtime</h2>${data}`; // Replace content

                    // Re-initialize form elements after loading
                    const editShowtimeIdInput = document.querySelector('#edit_showtime_id');
                    const editCinemaIdSelect = document.querySelector('#edit_cinema_id');
                    const editMovieIdSelect = document.querySelector('#edit_movie_id');
                    const editDefaultRowInput = document.querySelector('#edit_default_row');
                    const editVipRowInput = document.querySelector('#edit_vip_row');
                    const editNColumnInput = document.querySelector('#edit_n_column');
                    const editDateInput = document.querySelector('#edit_date');
                    const editTimeInput = document.querySelector('#edit_time');

                    // Show the popup
                    editPopupWrapper.classList.add('active');
                })
                .catch(error => {
                    console.error('Error fetching edit form:', error);
                    alert('Failed to load edit form.');
                });
        });
    });

    editCloseBtn.addEventListener('click', () => {
        editPopupWrapper.classList.remove('active');
        // Optionally clear the form content on close
        // editFormContainer.innerHTML = '<h2>Edit Showtime</h2>';
    });
});