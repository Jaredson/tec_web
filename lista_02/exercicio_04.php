<?php
/*5) Crie um formulário que receba um ano e mostre se o ano informado é "Antes de Cristo" ou "Depois de Cristo".
Se o ano for menor que 0 mostre: "Antes de Cristo".
Se o ano for maior ou igual a 0 mostre: "Depois de Cristo".*/

if(isset($_POST['calcular'])){
$ano = $_POST ['ano'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
    <form method="POST">

    <div class="mb-3">
    <label for="ano" class="form-label">Ano: </label>
    <input name="ano" type="number" class="form-control" id="ano"> <br>

    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

<div class="alert alert-success" role="alert">
<?php if(isset($_POST['calcular'])){

if ($ano > 0) {
    echo "O $ano é depois de Cristo";
}
elseif ($ano < 0){
    echo "O $ano é antes de Cristo";
}else{
    echo "Por convenção de especialistas, não existe ano 0";
}
}
?>
</div> 

</form>
</div>

</body>
</html>