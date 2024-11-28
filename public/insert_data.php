<?php
include '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO pendaftar (id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')";
    if ($koneksi->query($query)) {
        header('Location: crud.php');
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
