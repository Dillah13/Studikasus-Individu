<?php include 'koneksi.php'; ?>
<?php
//mengambil id produk dari url
$id = $_GET["id"];

$query = $koneksi->query("SELECT * FROM produk WHERE id='$id'");
$data = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detail);
//echo "</pre>";
?>
