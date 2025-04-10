<?php
include("./includes/showtime-manage.php");

// Initialize filter variables
$filter_by = $_GET['filter_by'] ?? '';
$filter_value = $_GET['filter_value'] ?? '';
$showtimes = [];
$errors = [];
$success_message = '';

// Database connection (assuming it's established in showtime-manage.php)
global $conn;

// Fetch all cinemas and movies for the filter dropdowns
$cinemas_result = $conn->query("SELECT DISTINCT cinema_name FROM cinemas ORDER BY cinema_name ASC");
$cinemas = [];
if ($cinemas_result->num_rows > 0) {
    while ($row = $cinemas_result->fetch_assoc()) {
        $cinemas[] = $row["cinema_name"];
    }
}

$movies_result = $conn->query("SELECT DISTINCT movie_name FROM movies ORDER BY movie_name ASC");
$movies = [];
if ($movies_result->num_rows > 0) {
    while ($row = $movies_result->fetch_assoc()) {
        $movies[] = $row["movie_name"];
    }
}

// Fetch all showtimes without any filter
$sql = "SELECT s.showtime_id, c.cinema_name, m.movie_name, s.date, s.time,
               c.cinema_id, m.movie_id
        FROM showtimes s
        JOIN cinemas c ON s.cinema_id = c.cinema_id
        JOIN movies m ON s.movie_id = m.movie_id
        ORDER BY s.showtime_id DESC"; // Display all by default, ordered by ID

$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $showtimes[] = $row;
        }
    }
} else {
    $errors[] = "Error fetching showtimes: " . $conn->error;
}

// Handle adding new showtime (from showtime-add.php)
if (isset($_POST['add_showtime'])) {
    $cinema_id = $_POST['cinema_id'];
    $movie_id = $_POST['movie_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    if (empty($cinema_id) || empty($movie_id) || empty($date) || empty($time)) {
        $errors[] = "All fields are required to add a showtime.";
    }

    if (empty($errors)) {
        $insert_sql = "INSERT INTO showtimes (cinema_id, movie_id, date, time)
                       VALUES ('" . $conn->real_escape_string($cinema_id) . "',
                               '" . $conn->real_escape_string($movie_id) . "',
                               '" . $conn->real_escape_string($date) . "',
                               '" . $conn->real_escape_string($time) . "')";

        if ($conn->query($insert_sql) === TRUE) {
            $success_message = "Showtime added successfully.";
            // Refresh showtimes after adding
            $result = $conn->query($sql);
            $showtimes = [];
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $showtimes[] = $row;
                }
            }
        } else {
            $errors[] = "Error adding showtime: " . $conn->error;
        }
    }
}

// Handle deleting a showtime (from showtime-list.php - assuming a form submission)
if (isset($_POST['delete_showtime']) && isset($_POST['showtime_id_to_delete'])) {
    $showtime_id_to_delete = $_POST['showtime_id_to_delete'];

    $delete_sql = "DELETE FROM showtimes WHERE showtime_id = '" . $conn->real_escape_string($showtime_id_to_delete) . "'";

    if ($conn->query($delete_sql) === TRUE) {
        $success_message = "Showtime deleted successfully.";
        // Refresh showtimes after deleting
        $result = $conn->query($sql);
        $showtimes = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $showtimes[] = $row;
            }
        }
    } else {
        $errors[] = "Error deleting showtime: " . $conn->error;
    }
}

// Fetch cinemas and movies for the add form
$all_cinemas = [];
$all_cinemas_result = $conn->query("SELECT cinema_id, cinema_name FROM cinemas ORDER BY cinema_name ASC");
if ($all_cinemas_result->num_rows > 0) {
    while ($row = $all_cinemas_result->fetch_assoc()) {
        $all_cinemas[$row['cinema_id']] = $row['cinema_name'];
    }
}

$all_movies = [];
$all_movies_result = $conn->query("SELECT movie_id, movie_name FROM movies ORDER BY movie_name ASC");
if ($all_movies_result->num_rows > 0) {
    while ($row = $all_movies_result->fetch_assoc()) {
        $all_movies[$row['movie_id']] = $row['movie_name'];
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Showtimes</title>
    <link rel="stylesheet" href="./css/showtime.css">
    <style>
        #contain {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .error-message {
            background-color: #ffe0e0;
            color: #d32f2f;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #f44336;
        }

        .success-message {
            background-color: #e6ffe6;
            color: #388e3c;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #4caf50;
        }

        .filter-options {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #e9e9e9;
            border-radius: 4px;
        }

        .filter-options label {
            margin-right: 10px;
            font-weight: bold;
        }

        .filter-options select,
        .filter-options input[type="text"],
        .filter-options button {
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .filter-options button {
            background-color: #00bcd4;
            color: white;
            cursor: pointer;
        }

        .filter-options button:hover {
            background-color: #008ba7;
        }

        .add-showtime-form {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .add-showtime-form h2 {
            margin-top: 0;
            color: #555;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .add-showtime-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .add-showtime-form select,
        .add-showtime-form input[type="date"],
        .add-showtime-form input[type="time"],
        .add-showtime-form button {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .add-showtime-form button {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .add-showtime-form button:hover {
            background-color: #45a049;
        }

        .showtime-list {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .showtime-list th,
        .showtime-list td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .showtime-list th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .showtime-list tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .showtime-list .action-buttons button {
            padding: 5px 10px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .showtime-list .edit-button {
            background-color: #ffc107;
            color: white;
        }

        .showtime-list .delete-button {
            background-color: #f44336;
            color: white;
        }

        .showtime-list .book-button {
            background-color: #007bff;
            color: white;
        }

        .showtime-list .action-buttons button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
<?php include("./nav.php")?>
<div id="contain">
        <h1>Manage Showtimes</h1>

        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success_message)): ?>
            <div class="success-message">
                <p><?php echo htmlspecialchars($success_message); ?></p>
            </div>
        <?php endif; ?>

        <div class="filter-options">
            <form method="get">
                <label for="filter_by">Filter By:</label>
                <select name="filter_by" id="filter_by" onchange="this.form.submit()">
                    <option value="">Show All</option>
                    <option value="cinema_name" <?php if ($filter_by === 'cinema_name') echo 'selected'; ?>>Cinema Name</option>
                    <option value="movie_name" <?php if ($filter_by === 'movie_name') echo 'selected'; ?>>Movie Name</option>
                    <option value="showtime_id" <?php if ($filter_by === 'showtime_id') echo 'selected'; ?>>Showtime ID</option>
                </select>

                <label for="filter_value">Select Value:</label>
                <select name="filter_value" id="filter_value" onchange="this.form.submit()">
                    <option value="">All</option>
                    <?php if ($filter_by === 'cinema_name'): ?>
                        <?php foreach ($cinemas as $cinema_name): ?>
                            <option value="<?php echo htmlspecialchars($cinema_name); ?>" <?php if ($filter_value === $cinema_name) echo 'selected'; ?>><?php echo htmlspecialchars($cinema_name); ?></option>
                        <?php endforeach; ?>
                    <?php elseif ($filter_by === 'movie_name'): ?>
                        <?php foreach ($movies as $movie_name): ?>
                            <option value="<?php echo htmlspecialchars($movie_name); ?>" <?php if ($filter_value === $movie_name) echo 'selected'; ?>><?php echo htmlspecialchars($movie_name); ?></option>
                        <?php endforeach; ?>
                            <?php elseif ($filter_by === 'showtime_id'): ?>
                            <?php
                            // Assuming $conn is still available here or re-established
                            global $conn;
                            $showtime_ids_result = $conn->query("SELECT DISTINCT showtime_id FROM showtimes ORDER BY showtime_id ASC");
                            if ($showtime_ids_result && $showtime_ids_result->num_rows > 0) {
                                while ($row = $showtime_ids_result->fetch_assoc()) {
                                    echo '<option value="' . htmlspecialchars($row["showtime_id"]) . '" ' . ($filter_value === strval($row["showtime_id"]) ? 'selected' : '') . '>' . htmlspecialchars($row["showtime_id"]) . '</option>';
                                }
                            }
                            ?>
                    <?php endif; ?>
                </select>

                <?php if (!empty($filter_by) || !empty($filter_value)): ?>
                    <a href="?" style="color: #00bcd4; text-decoration: none; margin-left: 10px;">Show All</a>
                <?php endif; ?>
            </form>
        </div>

        <div class="add-showtime-form">
            <h2>Add New Showtime</h2>
            <form method="post">
                <label for="cinema_id">Cinema:</label>
                <select name="cinema_id" id="cinema_id" required>
                    <option value="">Select Cinema</option>
                    <?php foreach ($all_cinemas as $id => $name): ?>
                        <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($name); ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="movie_id">Movie:</label>
                <select name="movie_id" id="movie_id" required>
                    <option value="">Select Movie</option>
                    <?php foreach ($all_movies as $id => $name): ?>
                        <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($name); ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="date">Date:</label>
                <input type="date" name="date" id="date" required>

                <label for="time">Time:</label>
                <input type="time" name="time" id="time" required>

                <button type="submit" name="add_showtime">Add Showtime</button>
            </form>
        </div>

        <table class="showtime-list">
            <thead>
                <tr>
                    <th>Showtime ID</th>
                    <th>Cinema</th>
                    <th>Movie</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($showtimes)): ?>
                    <tr><td colspan="6">No showtimes found.</td></tr>
                <?php else: ?>
                    <?php foreach ($showtimes as $showtime): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($showtime['showtime_id']); ?></td>
                            <td><?php echo htmlspecialchars($showtime['cinema_name']); ?></td>
                            <td><?php echo htmlspecialchars($showtime['movie_name']); ?></td>
                            <td><?php echo htmlspecialchars($showtime['date']); ?></td>
                            <td><?php echo htmlspecialchars($showtime['time']); ?></td>
                            <td class="action-buttons">
                                <form method="get" action="book-seats.php">
                                    <input type="hidden" name="showtime_id" value="<?php echo htmlspecialchars($showtime['showtime_id']); ?>">
                                    <input type="hidden" name="cinema_id" value="<?php echo htmlspecialchars($showtime['cinema_id']); ?>">
                                    <input type="hidden" name="movie_id" value="<?php echo htmlspecialchars($showtime['movie_id']); ?>">
                                    <button type="submit" class="book-button">Book Seats</button>
                                </form>
                                <button class="edit-button">Edit</button>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="delete_showtime" value="1">
                                    <input type="hidden" name="showtime_id_to_delete" value="<?php echo htmlspecialchars($showtime['showtime_id']); ?>">
                                    <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this showtime?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
</body>

</html>