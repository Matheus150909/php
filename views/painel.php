<?php
include('../config/protect.php');
require_once('../src/model/livro.php');

$livro = new Livro();
$livros = $livro->listBook();





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <?php

  include('nav-bar.php');
  if ($livros->num_rows > 0) {

    
  ?>
      <div class="container">
        <div class="row">
          <?php foreach ($livros as $livro) { ?>
          <div class="card mt-5 ms-5" style="width: 18rem;">
            <img src="<?= $livro['img'] ?>" class="card-img-top border-bottom border-dark-subtle" width="200px" height="350px">
            <div class="card-body">
              <h5 class="card-title"><?= $livro['nome'] ?></h5>
              <p class="card-text"><?= $livro['autor'] ?></p>
              <a href="livro-view.php" class="btn btn-success">vizualizar</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
  <?php 
  } else {
    echo "Sem livros para mostrar";
  } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>