<?php include 'koneksi/koneksi.php'; ?>
<?php
$keyword = $_GET["keyword"];

$semuadata = array();
$query = $conn->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'");
while ($data = $query->fetch_assoc()) {
    $semuadata[] = $data;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pencarian</title>
    <link rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php include 'menu.php' ?>
    <div class="container mt-5">
        <h3>Search result : '<?php echo $keyword ?>'</h3>

        <?php if (empty($data)) : ?>
            <div class="alert alert-danger">Product <strong><?php echo $data ?></strong> not found!</div>
        <?php endif ?>

        <div class="row">

            <?php foreach ($data as $key => $value) : ?>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="foto_produk/<?php echo $value['foto_produk']; ?>" alt="">
                        <div class="caption">
                            <h3><?php echo $value['nama_produk']; ?></h3>
                            <h5>Rp. <?php echo number_format($value['harga_produk']); ?></h5>
                            <a href="beli.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-primary">Buy</a>
                            <a href="detail.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-secondary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="row ms-5">
            <?php $query = $conn->query("SELECT * FROM produk"); ?>
            <?php while ($data = $query->fetch_assoc()) { ?>
                <div class="card me-4 ms-4 mb-4" style="width: 17rem;">
                    <img class="card-img-top" alt="gambar" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama_barang']; ?></h5>
                        <p class="card-text text-start">Rp. <?php echo number_format($data['harga'], 2, ',', '.'); ?></p>
                        <button type="button" class="userinfo btn btn-secondary" data-bs-toggle="modal" data-id="<?php echo $data['id']; ?>" data-bs-target="#modalViewData">
                            Detail
                        </button>

                    </div>
                </div>
            <?php } ?>


        </div>
</body>

</html>