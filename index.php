<?php
include('config.php');

$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Setlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Spotify Setlist</h1>
        <a href="create.php">Tambah Item</a>
    </header>

    <div class="container">
        <h1>Daftar Lagu</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Judul Lagu</th>
                <th>Aksi</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick=
                        "return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
