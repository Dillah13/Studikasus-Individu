<?php
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Product</title>
</head>

<body>

    <div class="container">
        <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color:  #212529">LIST DATA CATEGORY</h1>

        <a style="margin-top: 30px;" href="index.php?halaman=tambah_kategori" class="btn btn-secondary"><i class="fa-solid fa-square-plus me-2"></i>Add Category</a>
        <table class="table table-bordered table-dark" style="margin-top: 30px;">
            <tread>
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </tread>
            <tbody>
                <?php $no = 1; ?>
                <?php $query = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC"); ?>
                <?php while ($data = $query->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_kategori']; ?></td>
                        <td>
                            <a href="index.php?halaman=edit_kategori&id=<?php echo $data['id_kategori']; ?>" class="btn btn-primary">Edit</a> |
                            <a href="index.php?halaman=delete_kategori&id=<?php echo $data['id_kategori']; ?>" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>

                    </tr>
                    <?php $no++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>