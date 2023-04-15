<?php
/*9) Crie um formulário que receba o nome e a altura de uma pessoa. Mostre uma mensagem dizendo se ela possui estatura baixa, normal ou alta. Considere a tabela a seguir:
ALTURA                ESTATURA
<1,50                Baixo
>=1,50 e <1,80            Normal
>=1,80                Alto*/
if(isset($_POST['calcular'])){

    $nome = $_POST['nome'];
    $alt = $_POST['altura'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
    <form method="POST">

    <label for="nome" class="form-label">Nome: </label>
    <input name="nome" type="text" class="form-control" id="nome"><br>
    <label for="altura" class="form-label">Altura: </label>
    <input name="altura" type="number" class="form-control" id="altura"><br>
    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-success" role="alert">
  <?php if(isset($_POST['calcular'])){

    if($alt < 1.50){
        echo "$nome, sua estatura é considerada BAIXA.";
    }
    elseif($alt >= 1.50 && $alt < 1.80){
        echo "$nome, sua estatura é considerada NORMAL.";
    }
    elseif ($alt >=1.80){
        echo "$nome, sua estatura é considerada ALTA.";
    }
  ?>
</div> <?php } ?>

</form>
</div>
</body>
</html>