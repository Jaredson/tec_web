<?php
      //Verificação de o botão foi clicado
      if (isset($_POST['verificar'])) {

        $tecweb = isset($_POST['tecweb']) ? "Sim" : "Não"; //IF TERNÁRIO
        $geo = isset($_POST['geo']) ? "Sim" : "Não";
      }


      echo "Tecnologia web foi favoritada: " . $tecweb . "<br>";
      echo "Geografia favoritada: " . $geo . "<br>";

      ?>

<!DOCTYPE html>
<html lang="en">

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
    <h1>Exemplo checkbox e radio button</h1>
    <form method="POST">

      <h2>Dissciplinas favoritas</h2>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="selecionado" id="flexCheckDefault" name="tecweb">
        <label class="form-check-label" for="flexCheckDefault">
          Tecnologia Web
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="selecionado" id="flexCheckChecked" checked name="geo">
        <label class="form-check-label" for="flexCheckChecked">
          Geografia
        </label>
      </div>

      <h2 class="mt-5">Dias da semana favorito</h2>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Sábado</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">Domingo</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">Segunda</label>
      </div>

      <button type="submit" name="verificar" class="btn btn-primary mt-5">Verificar</button><!-- "mt" é a margem que coloca no class-->


    </form>
  </div>


</body>

</html>