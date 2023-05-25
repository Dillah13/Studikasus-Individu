<?php
// include database connection file
include_once("../koneksi/koneksi.php");

// Getting id from url
$id = $_GET["id"];

// Fetech user data based on id
$query = mysqli_query($conn, "SELECT * FROM `produk` WHERE id='$id'");


while ($data = mysqli_fetch_array($query)) {
  $kode_produk = $data['kode_produk'];
  $nama_produk = $data['nama_produk'];
  $harga = $data['harga'];
  $keterangan = $data['keterangan'];
  $id_kategori = $data['id_kategori'];
  $id_merk = $data['id_merk'];
  $data = $data['image'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #212529">EDIT DATA PRODUCT</h1>

    <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
      <table cellpadding="10" cellspacing="0" class="table table-bordered table-dark">
        <tr>
          <td>Category</td>
          <td><select id="kategori" class="form-select" aria-label="Kategori" name="id_kategori">
              <option selected>Choose Category</option>
              <?php
              $query = $conn->query("SELECT * FROM kategori");
              while ($data = $query->fetch_assoc()) {
              ?>
                <option value="<?= $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
              <?php
              } ?>
            </select></td>
        </tr>
        <tr>
          <td>Brand</td>
          <td><select id="merk" name="id_merk" class="form-select" aria-label="merk">
              <option disabled selected>Choose Brand</option>
              <?php
              $query = $conn->query("SELECT * FROM merk");
              while ($data = $query->fetch_assoc()) {
              ?>
                <option value="<?= $data['id_merk']; ?>"><?php echo $data['nama_merk']; ?></option>
              <?php
              } ?>
            </select></td>
        </tr>
        <tr>
          <td>Product Code</td>
          <td><input type="text" name="kode_produk" class="form-control" value="<?php echo $kode_produk ?>"></td>
        </tr>
        <tr>
          <td>Product Name</td>
          <td><input type="text" name="nama_produk" class="form-control" value="<?php echo $nama_produk ?>"></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="harga" class="form-control" value="<?php echo $harga ?>"></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea class="form-control" style="resize: none;" name="keterangan" rows="5"><?php echo $keterangan ?></textarea></td>
        </tr>
        <tr>
          <td>Previous Product Pict</td>
          <?php
          $query = $conn->query("SELECT * FROM produk WHERE id='$_GET[id]'");
          while ($data = $query->fetch_assoc()) {
          ?>
            <td><img style="width: 100px; height: 100px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"></td>
          <?php
          } ?>
        </tr>
        <tr>
          <td>Change Pict</td>
          <td><input type="file" name="image" class="form-control">
            <p style="color: red; padding-top: 5px">Allowed extension .png , .jpg , .jpeg </p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" class="btn btn-secondary" value="Update"></td>
        </tr>
      </table>


    </form>
  </div>
</body>

</html>