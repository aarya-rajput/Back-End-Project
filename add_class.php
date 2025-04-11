<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$class_name = htmlspecialchars(string: $_POST['class_name']);
$capacity = (int)$_POST['capacity'];
$teacher_id = (int)$_POST['teacher_id'];

$sql = "INSERT INTO classes (class_name, capacity, teacher_id) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $class_name, $capacity, $teacher_id);

if ($stmt->execute()) echo "Class added successfully.";
else echo "Error: " . $stmt->error;

$stmt->close(); $conn->close();
?>
