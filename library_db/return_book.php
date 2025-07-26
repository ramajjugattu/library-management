<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Return Book</title>
    <style>
        body {
            background-color: #f4f6f8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
        }

        .sub-header {
            text-align: center;
            font-size: 20px;
            color: #2c3e50;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .container {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #2c3e50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #1a242f;
        }
    </style>
</head>
<body>

    <header>Library Management</header>
    <div class="sub-header">all books</div>

    <div class="container">
        <form method="post">
            <label for="book_id">Book ID:</label>
            <input type="number" name="book_id" id="book_id" required>
            <button type="submit" name="submit">Return</button>
        </form>
    </div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['book_id'];
    $sql = "UPDATE books SET issued_to='' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Book Returned'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
