<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include '../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $student_id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $borrow_date = $_POST['borrow_date'];
    $due_date = $_POST['due_date'];
    $return_date = $_POST['return_date'];
    $fine = $_POST['fine'];

    if (!empty($student_id) && !empty($book_id)) {
        $stmt = $conn->prepare("INSERT INTO borrow_return(student_id, book_id, borrow_date, due_date, return_date, fine) VALUES (:student_id, :book_id, :borrow_date, :due_date, :return_date, :fine)");
      
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':borrow_date', $borrow_date);
        $stmt->bindParam(':due_date', $due_date);
        $stmt->bindParam(':return_date', $return_date);
        $stmt->bindParam(':fine', $fine);
        $stmt->execute();
        header("Location: displayborroworder.php");
    } else {
        echo "Student ID and Book ID cannot be empty.";
    }
}
?>

<form method="post" action="addborroworder.php">
    <!-- <label for="transaction_id">Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" required> -->
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required>
    <label for="book_id">Book ID:</label>
    <input type="text" id="book_id" name="book_id" required>
    <label for="borrow_date">Borrow Date:</label>
    <input type="date" id="borrow_date" name="borrow_date">
    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date">
    <label for="return_date">Return Date:</label>
    <input type="date" id="return_date" name="return_date">
    <label for="fine">fine:</label>
    <input type="text" id="fine" name="fine">
    <button type="submit">Add Borrow Order</button>
</form>