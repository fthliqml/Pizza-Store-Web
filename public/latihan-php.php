<?php
// get data from json
$data = file_get_contents('../data/pizza.json');
// decode json to an array
$menu = json_decode($data, true);
// get object menu
$menu = $menu["menu"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="../script/index.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./img/logo.png" alt="Logo" width="200" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div class="row mt-3">
          <div class="col">
            <h1>All Menu</h1>
          </div>
        </div>
        <div class="row">
          <!-- Repeat creating all of the element below one by one in data -->
          <?php foreach ($menu as $menu) : ?>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="./img/pizza/<?= $menu["gambar"]; ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $menu["nama"]; ?></h5>
                <p class="card-text"><?= $menu["deskripsi"]; ?></p>
                <h5 class="card-title">Rp. <?= $menu["harga"]; ?></h5>
                <a href="#" class="btn btn-primary mt-2">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  </body>
</html>
