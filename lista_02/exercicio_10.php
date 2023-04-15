<?php
/*10) Crie um formulário para receber a idade de uma pessoa e informe a sua classe eleitoral conforme a tabela a seguir:
IDADE                CLASSE ELEITORAL
<16 anos            Não eleitor
>= 18 e <= 65 anos        Eleitor obrigatório
16, 17 anos ou >65        Eleitor facultativo*/
if(isset($_POST['calcular'])){

    $nome = $_POST['nome'];
    $classe = $_POST['classe'];
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
    <label for="classe" class="form-label">Idade: </label>
    <input name="classe" type="number" class="form-control" id="classe"><br>
    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-success" role="alert">
  <?php if(isset($_POST['calcular'])){

    if($classe < 16){
        echo "$nome não é ELEITOR";
    }
    elseif($classe >= 18 && $classe <= 65){
        echo "$nome é um eleitor OBRIGATÓRIO";
    }
    elseif ($classe == 16 && $classe == 17 && $classe > 65){
        echo "$nome é um eleitor FACULTATIVO";
    }
  ?>
</div> <?php } ?>

</form>
</div>
</body>
</html>