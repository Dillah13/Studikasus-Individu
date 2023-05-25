<?php
include "../koneksi/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM `produk`
INNER JOIN `kategori` ON `produk`.`id_kategori` = `kategori`.`id_kategori`
INNER JOIN `merk` ON `merk`.`id_merk` = `produk`.`id_merk`;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Create Product</title>
  <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
</head>

<body>
  <div class="container">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #212529">LIST DATA PRODUCT</h1>
    <a href="index.php?halaman=tambah" style="text-align: center; margin-top: 20px" class="btn btn-secondary"><i class="fa-solid fa-square-plus me-2"></i> Add Data</a>
  </div>

  <div class="container mt-3">
    <table id="tableData" class="table table-bordered table-dark mt-5" style="width:100%">
      <thead>
        <tr>
          <th>No.</th>
          <th>Category</th>
          <th>Brand</th>
          <th>Product Code</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Pict Product</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($query) > 0) {
          $no = 1;
          while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data["nama_kategori"] ?></td>
              <td><?php echo $data["nama_merk"] ?></td>
              <td><?php echo $data["kode_produk"] ?></td>
              <td><?php echo $data["nama_produk"] ?></td>
              <td><?php echo $data["harga"] ?></td>
              <td><img style="width: 100px; height: 100px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"></td>
              <td>
                <h5><a style="text-decoration:none" href="edit.php?id=<?php echo $data["id"]; ?>" class="btn btn-primary"> Edit </a></h5>
                <h5><a style="text-decoration:none" href="delete.php?id=<?php echo $data["id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?')"" class=" btn btn-danger"> Delete </a></h5>
              </td>
            </tr>
          <?php $no++;
          } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>

<script>
  $(document).ready(function() {
    $('#tableData').DataTable();
  });
</script>