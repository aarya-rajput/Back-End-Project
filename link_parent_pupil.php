<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$pupil_id = (int)$_POST['pupil_id'];
$parent_id = (int)$_POST['parent_id'];

$sql = "INSERT INTO pupil_parent (pupil_id, parent_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $pupil_id, $parent_id);

if ($stmt->execute()) echo "Parent linked to pupil.";
else echo "Error: " . $stmt->error;

$stmt->close(); $conn->close();
?>
