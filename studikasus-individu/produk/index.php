<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="../produk/css/style.css" />
  <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color: 	#F8F8FF;">
  <div class="sidebar">
    <h2><i class="fa-solid fa-check me-2 pt-2" style="color: #ffffff;"></i>SPORT STORE</h2>
    <ul class="nav">
      <li>
        <a style="text-decoration:none" href="index.php?halaman=home">
          <i class="fa-solid fa-house-flag me-1"></i>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a style="text-decoration:none" href="index.php?halaman=produk">
          <i class="fa-sharp fa-solid fa-cart-flatbed-suitcase me-1"></i>
          <span>Product</span>
        </a>
      </li>
      <li>
        <a style="text-decoration:none" href="index.php?halaman=kategori">
          <i class="fa-sharp fa-solid fa-list me-1"></i>
          <span>Category</span>
        </a>
      </li>
      <li>
        <a style="text-decoration:none" href="../index.php">
          <i class="fa-solid fa-door-open me-1"></i>
          <span>Exit</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="main">
    <?php
    if (isset($_GET['halaman'])) {
      if ($_GET['halaman'] == "home") {
        include 'home.php';
      } else if ($_GET['halaman'] == "produk") {
        include 'produk.php';
      } else if ($_GET['halaman'] == "tambah") {
        include 'tambah.php';
      } else if ($_GET['halaman'] == "edit") {
        include 'edit.php';
      } else if ($_GET['halaman'] == "delete") {
        include 'tambah.php';
      } else if ($_GET['halaman'] == "kategori") {
        include 'kategori.php';
      } else if ($_GET['halaman'] == "tambah_kategori") {
        include 'tambah_kategori.php';
      } else if ($_GET['halaman'] == "edit_kategori") {
        include 'edit_kategori.php';
      } else if ($_GET['halaman'] == "delete_kategori") {
        include 'delete_kategori.php';
      }
    } else {
      include 'home.php';
    }

    ?>
  </div>

  </div>
</body>

</html>