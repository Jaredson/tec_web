<?php
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
    <form method="POST">

        <h2 class="mt-2">Dados pessoais: </h2>
        <div class="form-floating mb-3">
  <input type="nome" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Nome</label>
</div>
<div class="form-floating">
  <input type="idade" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Idade</label>
</div>

        <h2 class="mt-5">Dados Profissionais: </h2>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

    </form>
    </div>

</div>
</body>
</html>