<?php
include "koneksi/koneksi.php";

$userid = $_POST['userid'];
$sql = "SELECT * FROM `produk`
INNER JOIN `kategori` ON `produk`.`id_kategori` = `kategori`.`id_kategori`
INNER JOIN `merk` ON `merk`.`id_merk` = `produk`.`id_merk`
where id=" . $userid;
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($result)) {
?>
    <table border='0' width='100%'>
        <tr>
            <p>Category : <?php echo $data['nama_kategori']; ?></p>
            <p>Brand : <?php echo $data['nama_merk']; ?></p>
            <p>Product Code : <?php echo $data['kode_produk']; ?></p>
            <p>Product Name : <?php echo $data['nama_produk']; ?></p>
            <p>Price : <?php echo $data['harga']; ?></p>
            <p>Description : <?php echo $data['keterangan']; ?></p>
            </td>
        </tr>
    </table>

<?php } ?>