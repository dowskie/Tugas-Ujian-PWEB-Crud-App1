<?php

$servername = "localhost";
$username = "root"; // default user
$password = "";     // default password kosong
$dbname = "crud_db"; // nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
