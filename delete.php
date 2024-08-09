<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM daftar_pesanan WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

header('Location: editPesanan.php');
