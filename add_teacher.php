<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = htmlspecialchars($_POST['name']);
$address = htmlspecialchars($_POST['address']);
$phone = htmlspecialchars($_POST['phone_number']);
$salary = (float)$_POST['annual_salary'];
$check = isset($_POST['background_check']) ? 1 : 0;

$sql = "INSERT INTO teachers (name, address, phone_number, annual_salary, background_check)
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssdi", $name, $address, $phone, $salary, $check);

if ($stmt->execute()) echo "Teacher added successfully.";
else echo "Error: " . $stmt->error;

$stmt->close(); $conn->close();
?>
