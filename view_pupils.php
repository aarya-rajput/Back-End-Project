<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT pupils.pupil_id, pupils.name, classes.class_name
        FROM pupils
        LEFT JOIN classes ON pupils.class_id = classes.class_id";

$result = $conn->query($sql);

echo "<h1>Pupils</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['pupil_id']}: {$row['name']} - Class: {$row['class_name']}</li>";
}
echo "</ul>";

$conn->close();
?>
