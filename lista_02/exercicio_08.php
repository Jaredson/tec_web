<?php
/*8) Crie um formulário para receber a idade e mostre sua classe de idade conforme a tabela abaixo:
IDADE        CLASSE
0 a 14       Criança
15 a 17      Adolescente
18 a 24      Jovem
25 a 64      Adulto
>= 65        Idoso*/
if(isset($_POST['calcular'])){
    $idade = $_POST['idade'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe de Idade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form method="POST">

        <div class="mb-3">
    <label for="idade" class="form-label">Idade: </label>
    <input name="idade" type="number" class="form-control" id="idade"> <br>
    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-success" role="alert"> 
        <?php if(isset($_POST['calcular'])){

            if($idade > 0 && $idade <= 14){
                echo "CRIANÇA";
            }
            if($idade >= 15 && $idade <= 17){
                echo "ADOLESCENTE";
            }
            if($idade >= 18 && $idade <= 24){
                echo "JOVEM";
            }
            if($idade >= 25 && $idade <= 64){
                echo "ADULTO";
            }
            if($idade >= 65){
                echo "IDOSO";
            }
        ?>
</div> <?php } ?>
</form>
</div>
</body>
</html>