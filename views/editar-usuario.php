<?php

require_once('../src/model/user.php');
session_start();


$user = new user();
$usuarios = $user->findByid($_GET['id']);

$user = $usuarios->fetch_assoc();

if ($usuarios->num_rows > 0){
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include('nav-bar.php'); ?>

  <div class="container mt-5">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h4>Editar Usuario <a href="lista-usuario.php" class="btn btn-primary float-end">Voltar</a></h4>

        </div>
                <div class="card-body">
          <form action="/AulaLogin2/config/acoes.php" method="POST">
            <div class="mb-3">
              <label>ID</label>
                <p><?= $user['id']; ?></p>
                <input type="id" name="id" class="form-control" value="<?= $user['id'] ?>">
            </div>
        <div class="card-body">
          <form action="../config/acoes.php" method="POST">
            <div class="mb-3">
              <label>Nome</label>
              <input type="nome" name="nome" class="form-control"  value="<?= $user['nome'] ?>">
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>">
            </div>
            <div class="mb-3">
              <label>Senha</label>
              <input type="password" name="senha" class="form-control">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit" name="editar_usuario">Salvar</button>
            </div>
          </form>
        </div>

        <?php } else{

            echo "<h5>usuario não encontrado</h5>";

        }
        ?>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>