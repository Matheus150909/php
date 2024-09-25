
<?php

require_once('../src/model/livro.php');
session_start();
$livro = new Livro();
$livros = $livro->findByid($_GET['id']);
$livro = $livros->fetch_assoc();

if ($livros->num_rows > 0){
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
          <h4>Cadastro de livro <a href="../lista-livro.php" class="btn btn-primary float-end">Voltar</a></h4>

        </div>
        <div class="card-body">
          <div class="border aling-center">
             <img src="data:image/jpeg;base64,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Sc22lfXTao6OTaVVM47wlZfovdVrFqrHlEv14WO7DQvZuHYn7Y0UnKDoT97G6k6fZHStJlVGcz2HicCpfUsGd7BxuAVZtjpXZTQwu4Y9heNIavVlPRDPQkeZiPUSqnS7Sr1UUUWR1TEXeK12yP5mMu49CrzVWdljqpwyRjJJoHtDxiuOKyOIuLc7QbbtjwBb2KugZtKeUcDY2t/MAtVqswm51K8CDEacUEvc3GHftsQ1twcts5CmJ7piMnW6zM16At8SeVvpYsn513arPWPm+Kqmb0zH+nGG/pqzF6dPLDFixleRERXcxVvqm1spKuqmqBVMaJS04hhLsXFY1lsbZBfa3zbqshFE1id1q3ms5wqyPWsqm5sI283J1bMsna2FYf8A5I+rf71WiippU4X1r8qofrTVB22EAeOJ565l5N1nZB/zIvUO96rcRNKvBrX5VONaKXyuH1DverIa0s3lcP2c+9VrImlXhPiMTlVf7qJ/LIvs7vep+6mfyyL7O73qtRE0qcHiMTlVR1ppj/zIfs7verD90Ehz1kQ4qd3vVbCJpV4PEYnKn6zWgnYxzoqqN8gF2tMJixjvbJsjsXjsuYqNSmFR3r6epdxhkvQ7GNuYr9DoonCrJGPb17qAoNReFZnBmxSxtJFzIWxsaN0ljTc8QC6Yazjx/wA1n2Y++VsopjCrBOPf07Kn/dDKP+ZEeOnd71ZDWlm8rh+zn3qtZE0q8HiMTlVX7p5vLIfs7vep+6abyyH7Ofeq1UTSrweIxOVUnWkm8rh+zn3qxOtFL5XD6h3vVbCJpV4PEYnKpP3PSXuKyIHfEDver2brU1QzYRtxRyD9ZWqiaVeEa1+VX/uxrP8A7L/E/wB6vGbWnqH7fCAdwOieR0GVWsiaVODWvy47UDqLfg10xdO2XZRGABGY8XY8fLlc698fQuxRFeIy7Q52tNpzkREUoEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf/Z" class="img-thumbnail rounded mx-auto d-block">
            </div>
            <div class="mb-3">
              <label>ID</label>
              <p><?php echo $livro['id'] ?></p>
            </div>
            <div class="mb-3">
              <label>Nome</label>
            <p><?php echo $livro['nome'] ?></p>
            </div>
            <div class="mb-3">
              <label>Email</label>
            <p><?php echo $livro['autor'] ?></p>
            </div>
            <div class="mb-3">
              <label>Email</label>
            <p><?php echo $livro['editora'] ?></p>
            </div>
            <div class="mb-3">
              <label>Email</label>
            <p><?php echo $livro['ano'] ?></p>
            </div>
            <div class="mb-3">
              <label>Email</label>
            <p><?php echo $livro['categoria'] ?></p>
            </div>
      
        </div>

      </div>
    </div>
  </div>
  <?php   }
  else {  ?>

    <h5>livro não encontrado</h5>

  <?php }  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>