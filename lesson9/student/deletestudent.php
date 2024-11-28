<?php
include '../database/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM Students WHERE student_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: displaystudent.php");
}
?>