<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$sql = "DELETE FROM menu WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Menu dihapus"]);
} else {
    echo json_encode(["error" => $conn->error]);
}
?>
