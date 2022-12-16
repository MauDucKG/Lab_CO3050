<?php
require_once('db_connnection.php');
$name = $_POST['name'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/lab_04/phan2_bai2/delete1.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => "name=$name",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


if ($response) {
    echo "Successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
