<?php
    /*1) Crie um programa para receber 3 números: A, B e C. Calcule e mostre o valor de X de acordo com a seguinte expressão: X = A + B - C*/ 
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];

    $calculo = $A + $B - $C;
    echo "O valor da conta é $calculo."

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    
    <h2>Cálculo</h2>

    <form method="POST">
        A: <input type="text" name="A"><br><br>
        B: <input type="text" name="B"><br><br>
        C: <input type="text" name="C"><br><br>
        <input type="submit" value="Calcular" name="calcular">
</body>
</html>