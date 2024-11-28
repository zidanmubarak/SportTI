<?php
include '../includes/config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "UPDATE pendaftar SET name='$nama', email='$email', phone='$phone' WHERE id=$id";
    if ($koneksi->query($query)) {
        header('Location: crud.php');
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
