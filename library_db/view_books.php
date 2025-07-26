<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .main-header {
            background-color: #007bff; /* Blue */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

    <div class="main-header">Library Management</div>

    <div class="container">
        <h2>All Books</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Issued To</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM books");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['book_name']}</td>
                        <td>{$row['author']}</td>
                        <td>{$row['issued_to']}</td>
                      </tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>
