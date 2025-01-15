<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Tambah Item</h1>
        <a href="index.php">Kembali</a>
    </header>

    <div class="container">
        <form action="create.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" required></textarea><br>

            <input type="submit" value="Tambah">
        </form>
    </div>
</body>
</html>
