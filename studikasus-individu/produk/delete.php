<?php
// include database connection file
include "../koneksi/koneksi.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM produk WHERE id=$id");

echo"<script>alert('Data deleted successfully!');window.location='index.php?halaman=produk';</script>";
?>