<?php

class Empregado {
    private $nome;
    private $salarioMensal;

    public function __construct($nome, $salarioMensal) {
        $this->nome = $nome;
        $this->setSalarioMensal($salarioMensal);
    }

  
    public function getNome() {
        return $this->nome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSalarioMensal($salarioMensal) {
        if ($salarioMensal > 0) {
            $this->salarioMensal = $salarioMensal;
        } else {
            $this->salarioMensal = 0.0;
        }
    }

  //calculo do salário anual
    public function salarioAnual() {
        return $this->salarioMensal * 12;
    }

    //aumento de salário
    public function aplicarAumento($porcentagem) {
        $aumento = $this->salarioMensal * ($porcentagem / 100);
        $novoSalario = $this->salarioMensal + $aumento;
        $this->setSalarioMensal($novoSalario);
    }
}

$empregado1 = new Empregado("Guilherme", 2000.0);
$empregado2 = new Empregado("Maria", 2500.0);

echo "Salário anual do empregado 1: $" . $empregado1->salarioAnual();
echo "Salário anual do empregado 2: $" . $empregado2->salarioAnual();

//aumento de 10%
$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);

echo "\nSalário anual do empregado 1 após aumento: $" . $empregado1->salarioAnual();
echo "\nSalário anual do empregado 2 após aumento: $" . $empregado2->salarioAnual();
