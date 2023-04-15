<?php
/*6) Crie um formulário que receba um número e mostre se o número informado é NEGATIVO, ZERO ou POSITIVO.*/
if(isset($_POST['calcular'])){

    $num = $_POST['numero'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
    <form method="POST">

    <div class="mb-3">
    <label for="numero" class="form-label">Número: </label>
    <input name="numero" type="number" class="form-control" id="numero"> <br>

    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-secondary" role="alert">
        <?php if(isset($_POST['calcular'])){
        if($num > 0){
            echo "POSITIVO";
        }
        elseif($num < 0){
            echo "NEGATIVO";
        }else{
            echo "ZERO";
        }
    }
        ?>
    </div>

</form>
</div>
</body>
</html>