<?php
/*2) Crie um formulário para receber o raio e a altura de uma lata de refrigerante. Calcule e mostre o volume da lata conforme a fórmula a seguir: V = Pi * R² * h*/

    if (isset($_POST['calcular'])){
        
    $raio = $_POST['raio'];
    $alt = $_POST['altura'];

    $volume = pi() * $alt *($raio * $raio);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
    <h2>Volume de um Cilindro</h2>

    <form method="POST">

    <div class="mb-3">
    <label for="raio" class="form-label">Raio: </label>
    <input name="raio" type="number" class="form-control" id="raio"> 
    </div>
    
    <div class="mb-3">
    <label for="altura" class="form-label">Altura: </label>
    <input name="altura" type="number" class="form-control" id="altura"> <br>
    </div>

    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-primary" role="alert">
    <?php if (isset($_POST['calcular'])){
    echo "O valor do volume é: $volume";
    ?>
</div> <?php } ?>
    </form>

</body>

</html>