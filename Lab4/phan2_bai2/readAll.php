<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('db_connnection.php');
$conn = OpenCon();

$query = "SELECT * FROM `products`;";

$result = $conn->query($query);
if ($result->num_rows > 0) {
    $products_arr = array();
    $products_arr["records"] = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $product_item = array(
            "id" => $id,
            "name" => $name,
            "description" => $description,
            "price" => $price,
            "image" => $image
        );
        array_push($products_arr["records"], $product_item);
    }
    http_response_code(200);
    echo json_encode($products_arr);
} else {
    http_response_code(200);
    echo json_encode(
        array("message" => "No products found.")
    );
}
