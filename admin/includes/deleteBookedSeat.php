<?php
header('Content-Type: application/json');

include('./connector.php');

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);
    if (isset($data['seatId'])) {
        $cinemaValue = $conn->real_escape_string($data['cinemaId']);
        $seatValue = $conn->real_escape_string($data['seatId']);
        $sql = "DELETE FROM bookedSeats WHERE cinema_id = '$cinemaValue' AND seat_id = '$seatValue'";
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
            echo json_encode(['message' => 'Booking deleted successfully', 'data' => $json_data]);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error deleting booking: ' . mysqli_error($conn)]);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid or missing SeatId in request body']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Only DELETE requests are allowed']);
}

// Close the database connection if you opened it within connector.php
// if ($conn) {
//     mysqli_close($conn);
// }
?>