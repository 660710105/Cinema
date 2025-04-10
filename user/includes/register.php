<?php
header('Content-Type: application/json'); // กำหนดให้ตอบกลับเป็น JSON สำหรับ AJAX
$conn = include("./connector.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = ($_POST["email"]);
    $password = sha1(htmlspecialchars($_POST["password"]));

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please enter info']);
        exit();
    }

    // ตรวจสอบว่าอีเมลซ้ำหรือไม่
    $stmt_check = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'This email has already registered']);
        $stmt_check->close();
        exit();
    }
    $stmt_check->close();

    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

    if ($stmt->execute()) {
        http_response_code(201); // Created
        echo json_encode(['success' => true, 'message' => 'Register Complete']);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['success' => false, 'message' => 'Register Error: ' , $stmt->error]);
    }
    exit();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit();
}

$conn->close();
?>