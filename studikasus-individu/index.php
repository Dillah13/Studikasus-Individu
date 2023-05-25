<?php
include 'koneksi/koneksi.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPORT SHOP</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: 	#F8F8FF;">
  <?php include 'menu.php' ?>;

  <div class="col-md-12">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide/header1.jpg" class="d-block img-fluid w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide/header2.jpg" class="d-block img-fluid w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide/header3.jpg" class="d-block img-fluid w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h5 class="text-center font-weight-bold m-4">LIST OF THE PRODUCT</h5>

    <div class="row p-4">
      <?php $query = $conn->query("SELECT * FROM produk"); ?>
      <?php while ($data = $query->fetch_assoc()) { ?>
        <div class="card me-3 ms-2 mt-4 ml-2" style="width: 17rem;">
          <img class="card-img-top" alt="gambar" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>">
          <div class="card-body m-4">
            <h5 class="card-title text-start"><?php echo $data['nama_produk']; ?></h5>
            <p class="card-text text-start">Rp. <?php echo number_format($data['harga'], 2, ',', '.'); ?></p>
            <button type="button" class="userinfo btn btn-secondary" data-bs-toggle="modal" data-id="<?php echo $data['id']; ?>" data-bs-target="#modalViewData">
              Details
            </button>
          </div>
        </div>

      <?php } ?>
      <script type='text/javascript'>
        $(document).ready(function() {
          $('.userinfo').click(function() {
            var userid = $(this).data('id');
            $.ajax({
              url: 'ajaxfile.php',
              type: 'post',
              data: {
                userid: userid
              },
              success: function(response) {
                $('.modal-body').html(response);
                $('#empModal').modal('show');
              }
            });
          });
        });
      </script>

      <div class="modal fade" id="empModal" role="dialog">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Product</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <footer class="bg-dark text-white mt-5 p-5 ">
      <div class="row" href="#">
        <div class="col-md-3">
          <h5>GET HELP</h5>
          <ul>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Order Status</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Delivery</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Return</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Payment Options</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>ABOUT THE STORE</h5>
          <ul>
            <li><a class="nav-link active text-light" aria-current="page" href="#">News</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Careers</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Investors</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Sustainbillity</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>FEATURED</h5>
          <ul>
            <li><a class="nav-link active text-light" aria-current="page" href="#">New Arrivals</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Impossible is Nothing</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Sale</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Last Chance</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>PLATFORMS</h5>
          <ul>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Web</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">macOS</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Windows</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">IOS</a></li>
            <li><a class="nav-link active text-light" aria-current="page" href="#">Android</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  </div>

</body>

</html>