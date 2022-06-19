<?php
class Pedido
{

    private $numero;
    private $itens = array();

    function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function addItem($itens): void
    {
        $this->itens[] = $itens;
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->itens as $itens) {
            $total += $itens->calcularSubTotal();
        }

        return $total;
    }

    public function showAllItens(): void
    {
        foreach ($this->itens as $itens) {
            echo "<br>" . $itens->getNomeDoProduto() . " R$" . $itens->getValorProduto() .
                " x " . $itens->getQuantidade() . " = " . $itens->calcularSubTotal();
        }
        echo "<br>";
    }
}
