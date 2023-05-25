<?php
include 'koneksi/koneksi.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Studikasus</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  //bootstrap
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  //font awesome
  <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: 	#F8F8FF;">
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <h3><i class="fa-solid fa-check me-2 pt-2" style="color: #ffffff;"></i></h3>
      <a class="navbar-brand fw-bold text-light" href="index.php">SPORT STORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">

          <form class="d-flex" style="margin-right: 160px" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>

          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="produk/index.php?halaman=home">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="about.php">About</a>
          </li>

        </ul>


      </div>
    </div>
  </nav>

  <div class="col-md-12">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide/header1.jpg" class="d-block img-fluid w-200" alt="...">
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

    <h2 class="text-start text-center font-weight-bold m-5">ABOUT US</h2>
    <div class="row">
      <div class="col-md-4">
        <h4 class="text-start text-center font-weight-bold m-4  ">SIMPLICITY IN DESIGN</h4>
        <tr>
          <td>
            <p>
              No flashy logos, No senseless details, Just the worlds<br>
              most comfortable shoes, Made naturally and designed <br>
              pratically. It's that simple.
            </p>
          </td>
        </tr>
      </div>
      <div class="col-md-4">
        <h4 class="text-start text-center font-weight-bold m-4">CONFIDENCE IN COMFORT</h4>
        <tr>
          <td>
            <p>
              Trying is believing. Give our shoes.<br>
              Shot for 30 days, and if you're not<br>
              walking on cloud nine, well take them <br>
              back-no questions asked.
            </p>
          </td>
        </tr>
      </div>
      <div class="col-md-4 ">
        <h4 class="text-start text-center font-weight-bold m-4">MADE FROM NATURE</h4>
        <tr>
          <td>
            <p>
              The store industry often overlooks <br>
              Mother Nature's matrials in favour off <br>
              cheaper, synthetic alternatives. We <br>
              think it's time to change that.
            </p>
          </td>
        </tr>
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
    </footer>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>