<?php
include_once 'koneksi.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
mysqli_query($conn, $sql);
header('Location: index.php');
exit;
?>
