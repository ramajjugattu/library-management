<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Issue Book</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #1f2937;
            padding: 15px 30px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center; /* Centered content */
        }

        .navbar .title {
            font-weight: bold;
            font-size: 18px;
        }

        .form-container {
            background-color: white;
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #374151;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background-color: #f9fafb;
        }

        .form-group button {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .form-group button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="title">Library Management</div>
    </div>

    <div class="form-container">
        <h2>Issue Book</h2>
        <form method="post">
            <div class="form-group">
                <label for="book_id">Book ID:</label>
                <input type="number" id="book_id" name="book_id" required>
            </div>
            <div class="form-group">
                <label for="issued_to">Issued To:</label>
                <input type="text" id="issued_to" name="issued_to" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Issue Book</button>
            </div>
        </form>
    </div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['book_id'];
    $to = $_POST['issued_to'];
    $sql = "UPDATE books SET issued_to='$to' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Book Issued Successfully'); window.location.href='index.php';</script>";
    } else {
        echo "<p style='color: red; text-align:center;'>Error issuing book: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
