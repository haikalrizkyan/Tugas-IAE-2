<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$price = $data->price;

$sql = "UPDATE menu SET name='$name', price='$price' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Menu diupdate"]);
} else {
    echo json_encode(["error" => $conn->error]);
}
?>
