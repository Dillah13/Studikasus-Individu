<?php
include '../koneksi/koneksi.php';
?>
<html>

<head>
  <title>Add Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #212529">ADD NEW DATA</h1>

    <form action="proses_tambah.php" form id="addform" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
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
              <option disabled selected> Choose Brand</option>
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
        <tr>
          <td>Product Code</td>
          <td><input type="text" name="kode_produk" class="form-control required" placeholder="Code Product" title="Product coded is required"></td>
        </tr>
        <tr>
          <td>Product Name</td>
          <td><input type="text" name="nama_produk" class="form-control required" placeholder="Product Name" title="Product name is required"></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="harga" class="form-control required" placeholder="xxxxxxx" title="Price is required"></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="keterangan" style="resize: none;" class="form-control required" placeholder="Description" title="Description is required" rows="5" cols="21"></textarea></td>
        </tr>
        <tr>
          <td>Pict Product</td>
          <td><input type="file" name="image" class="form-control">
            <p style="color: red; padding-top: 5px">Allowed extensions .png , .jpg , .jpeg </p>
          </td>
        </tr>
        <td></td>
        <td>
          <input type="submit" name="Submit" value="Submit" class="btn btn-secondary">
        </td>

        </tr>
      </table>
    </form>
  </div>


</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    $("#addform").validate();
  })
</script>