<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = htmlspecialchars($_POST['name']);
$address = htmlspecialchars($_POST['address']);
$email = htmlspecialchars($_POST['email']);
$telephone = htmlspecialchars($_POST['telephone']);

$sql = "INSERT INTO parents (name, address, email, telephone) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $address, $email, $telephone);

if ($stmt->execute()) echo "Parent/Guardian added.";
else echo "Error: " . $stmt->error;

$stmt->close(); $conn->close();
?>
