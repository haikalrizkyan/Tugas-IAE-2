<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$price = $data->price;

$sql = "INSERT INTO menu (name, price) VALUES ('$name', '$price')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Menu ditambahkan"]);
} else {
    echo json_encode(["error" => $conn->error]);
}
?>
