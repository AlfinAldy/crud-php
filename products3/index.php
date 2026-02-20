<?php
require '../models/product3.php';


//membuat objek dari class product
$model_product = new Product();


//mengambil data
$data = $model_product->show();


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mulia Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- start of navbar  -->
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mulia Mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar  -->


    <!-- start of content  -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Product</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION["message"])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_SESSION["message"];?>
                    </div>
                <?php } unset($_SESSION["message"]); ?>
                <a href="create.php" class="btn btn-primary">Tambah Produk</a>
                <a href="../" class="btn btn-danger">Halaman Utama</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tgl Input</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $item) {
                        ?>


                        <tr>
                            <th scope="row"><?=$no; ?></th>
                            <td><?= $item['clothes_name'] ?></td>
                            <td><?= $item['description'] ?></td>
                            <td><?= $item['vendor'] ?></td>
                            <td><?= $item['unit'] ?></td>
                            <td><?= number_format($item['price']) ?></td>
                            <td><?= $item['created_at'] ?></td>
                            <td>
                                <form action="controller.php" method="post">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit </a>
                                    <button class="btn btn-danger"  name="destroy" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of content  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
