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
                <h1>Tambah Data Product</h1>
                <!-- start of form  -->
                <form action="controller.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="description" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="clothes_name" name="clothes_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">vendor</label>
                        <input type="text" class="form-control" id="vendor" name="vendor">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">unit</label>
                        <input type="text" class="form-control" id="unit" name="unit">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="../index.php" class="btn btn-danger">Kembali</a>
                </form>
                <!-- end of form  -->
            </div>
        </div>
    </div>
    <!-- end of content  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
