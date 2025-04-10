<?php
include("./includes/connector.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables for editing
$edit_showtime_id = null;
$edit_cinema_id = null;
$edit_movie_id = null;
$edit_default_row = null;
$edit_vip_row = null;
$edit_n_column = null;
$edit_date = null;
$edit_time = null;
$edit_errors = [];
$edit_success_message = '';
$show_edit_form = false;

if (isset($_GET['edit_id']) && is_numeric($_GET['edit_id'])) {
    $edit_showtime_id = $_GET['edit_id'];
    $sql_edit = "SELECT showtime_id, cinema_id, movie_id, default_row, vip_row, n_column, date, time FROM showtimes WHERE showtime_id = ?";
    $stmt_edit = mysqli_prepare($conn, $sql_edit);
    mysqli_stmt_bind_param($stmt_edit, "i", $edit_showtime_id);
    mysqli_stmt_execute($stmt_edit);
    $result_edit = mysqli_stmt_get_result($stmt_edit);
    if ($row_edit = mysqli_fetch_assoc($result_edit)) {
        $edit_cinema_id = $row_edit['cinema_id'];
        $edit_movie_id = $row_edit['movie_id'];
        $edit_default_row = $row_edit['default_row'];
        $edit_vip_row = $row_edit['vip_row'];
        $edit_n_column = $row_edit['n_column'];
        $edit_date = $row_edit['date'];
        $edit_time = $row_edit['time'];
        $show_edit_form = true;
    } else {
        $errors[] = "Showtime not found for editing.";
    }
    mysqli_stmt_close($stmt_edit);
}

// Handle form submission for updating
if (isset($_POST['update_showtime'])) {
    $update_showtime_id = $_POST['showtime_id'];
    $update_cinema_id = $_POST['cinema_id'];
    $update_movie_id = $_POST['movie_id'];
    $update_default_row = $_POST['default_row'];
    $update_vip_row = $_POST['vip_row'];
    $update_n_column = $_POST['n_column'];
    $update_date = $_POST['date'];
    $update_time = $_POST['time'];

    // Basic validation
    if (empty($update_cinema_id) || empty($update_movie_id) || empty($update_date) || empty($update_time)) {
        $edit_errors[] = "Please fill in all required fields.";
    }

    if (empty($edit_errors)) {
        $sql_update = "UPDATE showtimes SET cinema_id = ?, movie_id = ?, default_row = ?, vip_row = ?, n_column = ?, date = ?, time = ? WHERE showtime_id = ?";
        $stmt_update = mysqli_prepare($conn, $sql_update);
        mysqli_stmt_bind_param($stmt_update, "iiiiissi", $update_cinema_id, $update_movie_id, $update_default_row, $update_vip_row, $update_n_column, $update_date, $update_time, $update_showtime_id);
        if (mysqli_stmt_execute($stmt_update)) {
            $edit_success_message = "Showtime updated successfully!";
            $show_edit_form = false; // Hide the edit form after successful update
        } else {
            $edit_errors[] = "Error updating showtime: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt_update);
    } else {
        $show_edit_form = true; // Keep the edit form visible with errors
        $edit_showtime_id = $update_showtime_id; // Repopulate edit variables
        $edit_cinema_id = $update_cinema_id;
        $edit_movie_id = $update_movie_id;
        $edit_default_row = $update_default_row;
        $edit_vip_row = $update_vip_row;
        $edit_n_column = $update_n_column;
        $edit_date = $update_date;
        $edit_time = $update_time;
    }
}

// Handle deletion
if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM showtimes WHERE showtime_id = ?";
    $stmt_delete = mysqli_prepare($conn, $sql_delete);
    mysqli_stmt_bind_param($stmt_delete, "i", $delete_id);
    if (mysqli_stmt_execute($stmt_delete)) {
        $success_message = "Showtime deleted successfully!";
    } else {
        $errors[] = "Error deleting showtime: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt_delete);
}

// Fetch distinct cinema and movie IDs for dropdowns
$cinemas = [];
$result_cinemas = $conn->query("SELECT cinema_id, cinema_name FROM cinemas ORDER BY cinema_id ASC");
if ($result_cinemas->num_rows > 0) {
    while ($row = $result_cinemas->fetch_assoc()) {
        $cinemas[] = $row;
    }
}

$movies = [];
$result_movies = $conn->query("SELECT movie_id, movie_name FROM movies ORDER BY movie_id ASC");
if ($result_movies->num_rows > 0) {
    while ($row = $result_movies->fetch_assoc()) {
        $movies[] = $row;
    }
}

// Fetch all showtime data for listing
$filter_by = isset($_GET['filter_by']) ? $_GET['filter_by'] : '';
$filter_value = isset($_GET['filter_value']) ? $_GET['filter_value'] : '';

$sql_showtimes_data = "SELECT showtime_id, cinema_id, movie_id, default_row, vip_row, n_column, date, time FROM showtimes";
if (!empty($filter_by) && !empty($filter_value)) {
    $sql_showtimes_data .= " WHERE $filter_by = '" . $conn->real_escape_string($filter_value) . "'";
}
$result_showtimes_data = $conn->query($sql_showtimes_data);

mysqli_close($conn);
?>