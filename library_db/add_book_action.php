<?php
include 'db.php';

$book_name = $_POST['book_name'] ?? '';
$author = $_POST['author'] ?? '';

if ($book_name !== '' && $author !== '') {
    $sql = "INSERT INTO books (book_name, author) VALUES ('$book_name', '$author')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Book added successfully!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "<script>
            alert('Please fill all fields!');
            window.location.href = 'add_book.php';
          </script>";
}
?>
