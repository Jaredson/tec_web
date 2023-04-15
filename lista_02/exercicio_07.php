<?php
/*7) Crie um formulário para receber 4 notas de um aluno. Mostre se ele está APROVADO, REPROVADO ou em EXAME. Considere a tabela abaixo:
SITUAÇÃO    NOTA
Aprovado    >= 70
Reprovado    < 40
Exame        >= 40 e < 70*/

if(isset($_POST['calcular'])){
    $nota = $_POST['nota'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <form method="POST">

    <div class="mb-3">
    <label for="nota" class="form-label">Nota: </label>
    <input name="nota" type="number" class="form-control" id="nota"> <br>
    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>

    <div class="alert alert-success" role="alert">
  <?php if(isset($_POST['calcular'])){
    if($nota >= 70){
        echo "APROVADO";
    }
  ?>
</div> <?php } ?>

<div class="alert alert-danger" role="alert">
<?php if(isset($_POST['calcular'])){
    if ($nota < 40) {
        echo "REPROVADO";
    }
    ?>
</div> <?php } ?>

<div class="alert alert-warning" role="alert">
  <?php if(isset($_POST['calcular'])){
    if ($nota >= 40 && $nota < 70) {
        echo "EXAME";
    }
    ?>
</div> <?php  } ?>

</form>
</div>
    
</body>
</html>