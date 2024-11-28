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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM borrow_return WHERE transaction_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $order = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $student_id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $borrow_date = $_POST['borrow_date'];
    $due_date = $_POST['due_date'];
    $return_date = $_POST['return_date'];
    $fine = $_POST['fine'];

    $stmt = $conn->prepare("UPDATE borrow_return SET student_id = :student_id, book_id = :book_id, borrow_date = :borrow_date, due_date = :due_date, return_date = :return_date, fine = :fine WHERE transaction_id = :id");
    $stmt->bindParam(':student_id', $student_id);
    $stmt->bindParam(':book_id', $book_id);
    $stmt->bindParam(':borrow_date', $borrow_date);
    $stmt->bindParam(':due_date', $due_date);
    $stmt->bindParam(':return_date', $return_date);
    $stmt->bindParam(':fine', $fine);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: displayborroworder.php");
}
?>

<form method="post" action="editborroworder.php?id=<?php echo $id; ?>">
    
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" value="<?php echo $order['student_id']; ?>" required>
    <label for="book_id">Book ID:</label>
    <input type="text" id="book_id" name="book_id" value="<?php echo $order['book_id']; ?>" required>
    <label for="borrow_date">Borrow Date:</label>
    <input type="date" id="borrow_date" name="borrow_date" value="<?php echo $order['borrow_date']; ?>">
    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date" value="<?php echo $order['due_date']; ?>">
    <label for="return_date">Return Date:</label>
    <input type="date" id="return_date" name="return_date" value="<?php echo $order['return_date']; ?>">
    <label for="fine">Fine:</label>
    <input type="text" id="fine" name="fine" value="<?php echo $order['fine']; ?>">
    <button type="submit">Update Borrow Order</button>
</form>