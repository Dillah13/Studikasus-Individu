<?php
include "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Category</title>
</head>

<body>
  <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">Add Data Category</h1>
  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Category Name</label>
        <input type="text" style="margin-top:10px;" class="form-control" name="nama_kategori">
      </div>
      <button class="btn btn-secondary" style="margin-top:15px;" name="save">Save</button>
    </form>

    <?php
    if (isset($_POST['save'])) {
      $conn->query("INSERT INTO kategori
        (nama_kategori) VALUES ('$_POST[nama_kategori]')");

      echo "<script>alert('Data successfully added!');window.location='index.php?halaman=kategori';</script>";
    }
    ?>
  </div>
</body>

</html>