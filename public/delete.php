<?php
include '../includes/config.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM pendaftar WHERE id = $id");

header("Location: crud.php");
?>
