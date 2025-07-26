<?php
include 'db.php';

$id = $_POST['book_id'];

$sql = "UPDATE books SET status='available' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Book returned successfully'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
