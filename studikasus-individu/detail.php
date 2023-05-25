<?php include 'koneksi.php'; ?>
<?php

$id = $_GET["id"];

$query = $koneksi->query("SELECT * FROM produk WHERE id='$id'");
$data = $ambil->fetch_assoc();

?>
