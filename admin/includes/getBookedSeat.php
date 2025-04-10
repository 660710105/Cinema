<?php
header('Content-Type: application/json');
$conn = include('./connector.php');

$sortBy = isset($_GET['sortBy']) ? $_GET['sortBy'] : 'SeatID';
$cinemaFilter = isset($_GET['cinema']) ? $_GET['cinema'] : 'all';

$orderByClause = '';
switch ($sortBy) {
    case 'Name':
        $orderByClause = 'ORDER BY firstname ASC';
        break;
    case 'BookingTime':
        $orderByClause = 'ORDER BY booking_time DESC'; // Assuming you have a BookingTime column
        break;
    case 'SeatID':
    default:
        $orderByClause = 'ORDER BY seat_id ASC';
        break;
}

$whereClause = '';
if ($cinemaFilter !== 'all') {
    $whereClause = "WHERE CinemaID = " . mysqli_real_escape_string($conn, $cinemaFilter);
}
$defaultsql = "SELECT cinema_id, seat_id, booking_time, firstname, lastname, email FROM bookedSeats bs INNER JOIN users u ON bs.user_id = u.user_id";
$sql = $defaultsql . "" . $whereClause . " " . $orderByClause;
$result = mysqli_query($conn, $sql);

$data = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $response = ['result' => $data];
} else {
    $response = ['result' => [], 'message' => 'No booked seats found or database error.'];
}

echo json_encode($response);

mysqli_close($conn);
