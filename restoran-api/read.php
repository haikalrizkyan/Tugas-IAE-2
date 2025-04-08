<?php
include 'db.php';
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

$menus = [];
while ($row = $result->fetch_assoc()) {
    $menus[] = $row;
}

echo json_encode($menus);
?>
