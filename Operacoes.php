<?php

require_once './Calcular.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacoes = $_POST['operacao'];

$calculadora = new Calcular();

$calculadora->setNum1( $num1 );
$calculadora->setNum2( $num2 );

switch ($operacoes) {
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
            $calculadora->subtrair();
            break;
    case 'dividir':
        $calculadora->dividir();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;
}
$exibirCalculo = $calculadora->getResultado();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="jumbotron">
    <h1>Calculadora OO - PHP</h1>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Iniício</a></li>
    <li class="breadcrumb-item active" aria-current="page">resultado</li>
  </ol>
</nav>
<div class="jumbotron" id="resultaado">
    <h1 class="res-title">RESULTADO</h1>
    <?php echo "[ " . $exibirCalculo . " ]"?>
</div>