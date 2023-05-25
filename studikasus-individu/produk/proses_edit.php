<?php
include_once("../koneksi/koneksi.php");

$status = $statusMsg = '';
if (isset($_POST['submit'])) {
  $status = 'error';
  $id = $_GET["id"];
  if (!empty($_FILES["image"]["name"])) {
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $id_kategori = $_POST['id_kategori'];
    $id_merk = $_POST['id_merk'];

    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
      $image_tmp = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image_tmp));


      $result = mysqli_query($conn, "UPDATE `produk` SET kode_produk='$kode_produk',nama_produk='$nama_produk',harga='$harga',keterangan='$keterangan',id_kategori='$id_kategori',id_merk='$id_merk',image='$imgContent' WHERE id='$id';");
      if ($result) {
        $status = 'success';
        $status = 'success';
        $statusMsg = "File uploaded successfully.";
      } else {
        echo "<script>alert('Upload file failed, try again!');</script>";
      }
    } else {
      echo "<script>alert('Allowed extensions jpg, jpeg, dan png!');window.location='index.php?halaman=edit';</script>";
    }
  } else {
    echo "<script>alert('Incomplete data!');window.location='index.php?halaman=edit';</script>";
  }
}

// Display status message 
echo "<script>alert('Data changed successfully!');window.location='index.php?halaman=produk';</script>";
