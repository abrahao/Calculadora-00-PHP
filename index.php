<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora OO</title>
</head>

<body>
    <div class="jumbotron">
        <h1>Calculadora OO - PHP</h1>
    </div>
    <div class="jumbotron">
        <form action="Operacoes.php" method="post">
            <label>Num. 1 </label>
            <input type="number" name="num1">


            <label> Num. 2 </label>
            <input type="number" name="num2">

            <br>
            <label>
                <input type="radio" name="operacao" value="somar">
                Somar
            </label>
            <label>
                <input type="radio" name="operacao" value="subtrair">
                Subtrair
            </label>
            <label>
                <input type="radio" name="operacao" value="dividir">
                Dividir
            </label>
            <label>
                <input type="radio" name="operacao" value="multiplicar">
                Multiplicar
            </label>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>

</html>