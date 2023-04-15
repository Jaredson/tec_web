<?php

if (isset($_POST['calcular'])){
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];

$soma = $n1 + $n2;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">

    <h1>Minha Calculadora</h1>

    <form method="POST">
  <div class="mb-3">
    <label for="numero1" class="form-label">Número 1</label>
    <input name="numero1" type="number" class="form-control" id="numero1">
  </div>
  <div class="mb-3">
    <label for="numero2" class="form-label">Número 2</label>
    <input name="numero2" type="number" class="form-control" id="numero2">
    
  </div>
  <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

<div class="alert alert-primary" role="alert">
    <?php if (isset($_POST['calcular'])){
    echo "A soma de $n1 + $n2 é: " . number_format($soma, 2);
    ?>
</div> <?php } ?>

</form>
</div>

</body>
</html>