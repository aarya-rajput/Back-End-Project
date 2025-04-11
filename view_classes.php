<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT classes.class_id, classes.class_name, teachers.name AS teacher_name
        FROM classes
        LEFT JOIN teachers ON classes.teacher_id = teachers.teacher_id";

$result = $conn->query($sql);

echo "<h1>Classes</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>Class: {$row['class_name']} - Teacher: {$row['teacher_name']}</li>";
}
echo "</ul>";

$conn->close();
?>
