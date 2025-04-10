<?php

    header('Content-Type: application/json');

    $response = array('success' => false, 'message' => '');

    $conn = include("./connector.php");

    // Handle POST request for booking seats
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        if (isset($data['seats']) && is_array($data['seats']) && !empty($data['seats'])) {
            $seatsToBook = $data['seats'];
            $bookedSuccessfully = true;
            $conn->begin_transaction(); // Start transaction for atomicity

            foreach ($seatsToBook as $seatValue) {
                // Sanitize input to prevent SQL injection
                $seatValue = $conn->real_escape_string($seatValue);

                // Check if the seat is already booked
                $checkSql = "SELECT * FROM bookedseats WHERE seat_id = '$seatValue'";
                $checkResult = $conn->query($checkSql);

                if ($checkResult->num_rows > 0) {
                    $response['message'] = "Seat '$seatValue' is already booked.";
                    $bookedSuccessfully = false;
                    break;
                }

                // Insert the booking into the database
                $insertSql = "INSERT INTO bookedseats (cinema_id,seat_id) VALUES ('1','$seatValue')";
                if (!$conn->query($insertSql)) {
                    $response['message'] = "Error booking seat '$seatValue': " . $conn->error;
                    $bookedSuccessfully = false;
                    break;
                }
            }

            if ($bookedSuccessfully) {
                $conn->commit();
                $response['success'] = true;
                $response['message'] = "Seats booked successfully.";
            } else {
                $conn->rollback();
            }
        } else {
            $response['message'] = "No seats selected for booking.";
        }
    } else {
        $response['message'] = "Invalid request method.";
    }

    // Close the database connection
    $conn->close();

    // Send the JSON response back to the client
    echo json_encode($response);
?>