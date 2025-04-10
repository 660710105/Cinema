<?php
session_start();

$response = ['loggedin' => false];

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $response['loggedin'] = true;
    $response['firstname'] = $_SESSION['firstname'];
    $response['lastname'] = $_SESSION['lastname'];
    $response['user_id'] = $_SESSION['user_id'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>