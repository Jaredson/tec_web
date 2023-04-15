<?php
/*3) Crie um formulário para receber a temperatura em graus centígrados e apresente a temperatura convertida em graus Fahrenheit. A fórmula de conversão é:
F = (9*C + 160) / 5 */
if(isset($_POST['calcular'])){

$C = $_POST['celcius'];
$F = (9 * $C + 160) / 5;   
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

    <h2>Coversão de Temperatura</h2>
    <form method="POST">

    <div class="mb-3">
    <label for="celcius" class="form-label">Celsius</label>
    <input name="celcius" type="number" class="form-control" id="celcius"> <br>

    <button name="calcular" type="submit" class="btn btn-primary">Calcular</button> <br><br>
    </div>

    <div class="alert alert-primary" role="alert">
    <?php if (isset($_POST['calcular'])){
    echo "A coversão da temperatura em $C para Fahrenheit é: $F";
    ?>
</div> <?php } ?>

</form>
</div>

</body>
</html>