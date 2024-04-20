<?php

class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;
    
    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->setQuantidade($quantidade);
        $this->setPrecoPorItem($precoPorItem);
    }
    public function getNumero() {
        return $this->numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPrecoPorItem() {
        return $this->precoPorItem;
    }


    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidade($quantidade) {
        if ($quantidade > 0) {
            $this->quantidade = $quantidade;
        } else {
            $this->quantidade = 0;
        }
    }

    public function setPrecoPorItem($precoPorItem) {
        if ($precoPorItem > 0) {
            $this->precoPorItem = $precoPorItem;
        } else {
            $this->precoPorItem = 0.0;
        }
    }

    public function getTotalFatura() {
        $total = $this->quantidade * $this->precoPorItem;
        if ($total < 0) {
            $total = 0;
        }
        return $total;
    }
}

$fatura = new Fatura("001", "Teclado", 2, 25.5);
echo "Número da Fatura: " . $fatura->getNumero() . "<br>";
echo "Descrição: " . $fatura->getDescricao() . "<br>";
echo "Quantidade: " . $fatura->getQuantidade() . "<br>";
echo "Preço por Item: $" . $fatura->getPrecoPorItem() . "<br>";
echo "Total da Fatura: $" . $fatura->getTotalFatura() . "<br>";
