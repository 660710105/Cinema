<?php
session_start();
header('Content-Type: application/json'); // กำหนดให้ตอบกลับเป็น JSON สำหรับ AJAX
$conn = include("./connector.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $stmt_check = $conn->prepare("SELECT seat_id FROM bookedseats WHERE cinema_id = '2'");
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    $data = array();
    if ($result_check->num_rows > 0) {
        while ($row = $result_check->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode(["result" => $data]);
}
?>
