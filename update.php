<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "UPDATE items SET name='$name', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE id=$id";
    $result = $conn->query($sql);
    $item = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Edit Item</h1>
        <a href="index.php">Kembali</a>
    </header>

    <div class="container">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" value="
            <?php echo $item['name']; ?>" required><br>

            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" required>
                <?php echo $item['description']; ?></textarea><br>

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
