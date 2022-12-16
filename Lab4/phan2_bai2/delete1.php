<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('db_connnection.php');
$name = $_POST['name'];

$conn = OpenCon();
$query = "DELETE FROM `products` WHERE name = '" . $name . "';";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    http_response_code(200);
} else {
    http_response_code(200);
    echo json_encode(
        array("message" => "No products found.")
    );
}