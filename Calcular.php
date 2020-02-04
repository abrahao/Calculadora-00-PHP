<?php

class Calcular{
    private $num1;
    private $num2;
    private $resultado;

    public function __construct(){
        $this->num1 = 0;
        $this->num2 = 0;
        $this->resultado = 0;
    }
    public function setNum1($valor1){
        $this->num1 = $valor1;
    }
    public function setNum2($valor2){
        $this->num2 = $valor2;
    }
    
    public function somar(){
        $this->resultado = $this->num1 + $this->num2;
    }
    public function subtrair(){
        $this->resultado = $this->num1 - $this->num2;
    }
    public function dividir(){
        $this->resultado = $this->num1 / $this->num2;
    }
    public function multiplicar(){
        $this->resultado = $this->num1 * $this->num2;
    }
    
    public function getResultado(){
        return $this->resultado;
    }
}

?>