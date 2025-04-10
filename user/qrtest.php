<?php
 include('./includes/connector.php');

// Function to securely sanitize input data
function sanitizeInput($data) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($data));
}

// Check if the form has been submitted (assuming a form submission)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $payment_id = sanitizeInput($_POST["payment_id"]);
    $user_id = sanitizeInput($_POST["user_id"]);
    $total_price = sanitizeInput($_POST["total_price"]);

    // Handle image upload
    $payment_pic_name = null; // Initialize

    if (isset($_FILES["payment_pic"]) && $_FILES["payment_pic"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["payment_pic"]["name"];
        $filetype = $_FILES["payment_pic"]["type"];
        $filesize = $_FILES["payment_pic"]["size"];
        $tempname = $_FILES["payment_pic"]["tmp_name"];

        // Validate file type
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            echo "Error: Please select a valid image format (JPG, JPEG, PNG).<br>";
            exit();
        }

        // Validate file size (example: max 4GB)
        $maxsize = 4 * 1024 * 1024 * 1024;
        if ($filesize > $maxsize) {
            echo "Error: File size is larger than the allowed limit.<br>";
            exit();
        }

        // Validate MIME type
        if (!in_array($filetype, $allowed)) {
            echo "Error: Invalid file type.<br>";
            exit();
        }

        // Create a unique filename to avoid overwriting
        $payment_pic_name = uniqid() . "_" . $filename;

        $upload_dir = "uploads/";

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($tempname, $upload_dir . $payment_pic_name)) {
            echo "Payment picture uploaded successfully.<br>";
        } else {
            echo "Error: Could not upload the payment picture.<br>";
            $payment_pic_name = null; // Set to null if upload fails
        }
    } else {
        echo "No payment picture was uploaded or an error occurred.<br>";
    }

    // SQL query to insert data into the database table (replace 'payments' with your actual table name)
    $sql = "INSERT INTO payments (payment_id, user_id, total_price, payment_pic)
            VALUES ('$payment_id', '$user_id', '$total_price', '$payment_pic_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully into the database.<br>";
    } else {
        echo "Error inserting data: " . $conn->error . "<br>";
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Collect Payment Data</title>
</head>
<body>
    <h2>Enter Payment Information</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="payment_id">Payment ID:</label><br>
        <input type="text" id="payment_id" name="payment_id"><br><br>

        <label for="user_id">User ID:</label><br>
        <input type="text" id="user_id" name="user_id"><br><br>

        <label for="total_price">Total Price:</label><br>
        <input type="number" step="0.01" id="total_price" name="total_price"><br><br>

        <label for="payment_pic">Payment Picture:</label><br>
        <input type="file" name="payment_pic" id="payment_pic"><br><br>

        <input type="submit" value="Submit Payment Data">
    </form>
</body>
</html>