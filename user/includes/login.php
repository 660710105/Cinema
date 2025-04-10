<?php
session_start();
header('Content-Type: application/json'); // กำหนดให้ตอบกลับเป็น JSON สำหรับ AJAX
$conn = include("./connector.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = (htmlspecialchars($_POST["password"]));

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please enter email and password']);
        exit();
    }

    $stmt_check = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows == 1) {
        $user = $result_check->fetch_assoc();
        if ( sha1($password) == $user['password']) {
            // Login สำเร็จ
            $_SESSION['loggedin'] = true;
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['type_user'] = $user['type_user'];
            echo json_encode(['success' => true, 'message' => 'Login Complete', '$_SESSION' => $_SESSION]);
            exit(); // จบการทำงานหลังจาก Login สำเร็จสำหรับ AJAX
        } else {
            // รหัสผ่านไม่ถูกต้อง
            echo json_encode(['success' => false, 'message' => 'Wrong password']);
            exit(); // จบการทำงานหลังจาก Login ไม่สำเร็จสำหรับ AJAX
        }
    } else {
        // ไม่พบอีเมล
        echo json_encode(['success' => false, 'message' => 'Please register first']);
        exit(); // จบการทำงานหลังจากไม่พบอีเมลสำหรับ AJAX
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit();
}
?>