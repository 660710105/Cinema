<?php
include("./includes/connector.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];
$success_message = '';
$add_errors = [];
$add_success_message = '';
$cinema_ids = [];
$movies = []; // Array to store movie data

// Fetch distinct cinema IDs for the dropdown
$result_cinemas = $conn->query("SELECT cinema_id, cinema_name FROM cinemas ORDER BY cinema_id ASC");
if ($result_cinemas->num_rows > 0) {
    while ($row = $result_cinemas->fetch_assoc()) {
        $cinema_ids[] = $row;
    }
}

// Fetch movie data (ID and Name) for the dropdown
$result_movies = $conn->query("SELECT movie_id, movie_name FROM movies ORDER BY movie_name ASC");
if ($result_movies->num_rows > 0) {
    while ($row = $result_movies->fetch_assoc()) {
        $movies[] = $row;
    }
}

if (isset($_POST['add_new_showtime'])) {
    $cinema_id = $_POST['cinema_id'];
    $movie_id = $_POST['movie_id'];
    $default_row = $_POST['default_row'];
    $vip_row = $_POST['vip_row'];
    $n_column = $_POST['n_column'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Basic validation
    if (empty($cinema_id) || empty($movie_id) || empty($date) || empty($time)) {
        $add_errors[] = "Please fill in all required fields.";
    }

    if (empty($add_errors)) {
        $sql = "INSERT INTO showtimes (cinema_id, movie_id, default_row, vip_row, n_column, date, time) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iiiiiss", $cinema_id, $movie_id, $default_row, $vip_row, $n_column, $date, $time);

        if (mysqli_stmt_execute($stmt)) {
            $add_success_message = "Showtime added successfully!";
            header("Location: Showtime.php");
            exit();
        } else {
            $add_errors[] = "Error adding showtime: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
}

// Fetch all showtime data for listing (as in your original file)
$filter_by = isset($_GET['filter_by']) ? $_GET['filter_by'] : '';
$filter_value = isset($_GET['filter_value']) ? $_GET['filter_value'] : '';
$sql_showtimes_data = "SELECT showtime_id, cinema_id, movie_id, default_row, vip_row, n_column, date, time FROM showtimes";
if (!empty($filter_by) && !empty($filter_value)) {
    $sql_showtimes_data .= " WHERE $filter_by = '" . $conn->real_escape_string($filter_value) . "'";
}
$result_showtimes_data = $conn->query($sql_showtimes_data);

mysqli_close($conn);
?>

<style>
    .add-showtime-popup {
        display: none; /* Initially hidden */
        position: fixed; /* Stay in place when scrolling */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .add-showtime-popup-content {
        background-color: rgba(30, 40, 70);
        color: #eee;
        padding: 20px;
        border-radius: 10px;
        width: 20%;
        max-width: 600px;
        position: relative;
    }

    .close-popup-btn {
        color: #aaa;
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close-popup-btn:hover,
    .close-popup-btn:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .popup-form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .popup-form div {
        margin-bottom: 15px;
    }

    .popup-form label {
        display: block;
        margin-bottom: 5px;
        color: #fff;
    }

    .popup-form input[type="number"],
    .popup-form input[type="date"],
    .popup-form input[type="time"],
    .popup-form select {
        width: 100%;
        padding: 10px;
        border: 1px solid #555;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.1);
        color: #eee;
        box-sizing: border-box;
    }

    .popup-form button {
        background-color: #5cb85c; /* Green */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s ease;
    }

    .popup-form button:hover {
        background-color: #4cae4c;
    }

    .error-message {
        color: #e53935;
        margin-bottom: 10px;
    }

    .success-message {
        color: #33dd33;
        margin-bottom: 10px;
    }

    /* Style for the "Add New Showtime" button */
    #openAddShowtimeBtn {
        background-color: #007bff; /* Blue */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        margin-bottom: 20px;
        transition: background-color 0.3s ease;
    }

    #openAddShowtimeBtn:hover {
        background-color: #0056b3;
    }

</style>

<?php if (!empty($errors)): ?>
    <div class="error-message"><?php foreach ($errors as $error): ?><p><?php echo htmlspecialchars($error); ?></p><?php endforeach; ?></div>
<?php endif; ?>

<?php if (!empty($success_message)): ?>
    <div class="success-message">
        <p><?php echo htmlspecialchars($success_message); ?></p>
    </div>
<?php endif; ?>

<button id="openAddShowtimeBtn">Add New Showtime</button>

<div id="addShowtimePopup" class="add-showtime-popup">
    <div class="add-showtime-popup-content">
        <span class="close-popup-btn">&times;</span>
        <form method="post" class="popup-form">
            <h2>Add New Showtime</h2>
            <?php if (!empty($add_errors)): ?>
                <div class="error-message"><?php foreach ($add_errors as $error): ?><p><?php echo htmlspecialchars($error); ?></p><?php endforeach; ?></div>
            <?php endif; ?>
            <?php if (!empty($add_success_message)): ?>
                <div class="success-message">
                    <p><?php echo htmlspecialchars($add_success_message); ?></p>
                </div>
            <?php endif; ?>
            <div>
                <label for="cinema_id_popup">Cinema:</label>
                <select name="cinema_id" id="cinema_id_popup" required>
                    <option value="">Select Cinema</option>
                    <?php foreach ($cinema_ids as $cinema): ?>
                        <option value="<?php echo htmlspecialchars($cinema['cinema_id']); ?>"><?php echo htmlspecialchars($cinema['cinema_name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="movie_id_popup">Movie:</label>
                <select name="movie_id" id="movie_id_popup" required>
                    <option value="">Select Movie</option>
                    <?php foreach ($movies as $movie): ?>
                        <option value="<?php echo htmlspecialchars($movie['movie_id']); ?>"><?php echo htmlspecialchars($movie['movie_name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="default_row_popup">Default Rows:</label>
                <input type="number" name="default_row" id="default_row_popup" min="0" value="0">
            </div>
            <div>
                <label for="vip_row_popup">VIP Rows:</label>
                <input type="number" name="vip_row" id="vip_row_popup" min="0" value="0">
            </div>
            <div>
                <label for="n_column_popup">Columns:</label>
                <input type="number" name="n_column" id="n_column_popup" min="1" value="10" required>
            </div>
            <div>
                <label for="date_popup">Date:</label>
                <input type="date" name="date" id="date_popup" required>
            </div>
            <div>
                <label for="time_popup">Time:</label>
                <input type="time" name="time" id="time_popup" required>
            </div>
            <div>
                <button type="submit" name="add_new_showtime">Add Showtime</button>
            </div>
        </form>
    </div>
</div>
<script>
    const openAddBtn = document.getElementById('openAddShowtimeBtn');
    const addPopup = document.getElementById('addShowtimePopup');
    const closeAddBtn = addPopup.querySelector('.close-popup-btn');

    openAddBtn.addEventListener('click', () => {
        addPopup.style.display = 'flex';
    });

    closeAddBtn.addEventListener('click', () => {
        addPopup.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === addPopup) {
            addPopup.style.display = 'none';
        }
    });
</script>