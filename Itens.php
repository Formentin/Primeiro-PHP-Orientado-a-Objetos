<?php
class Itens
{
    private $quantidade;
    private Produto $produto;

    function __construct($quantidade, Produto $produto)
    {
        $this->quantidade = $quantidade;
        $this->produto = $produto;
    }

    public function calcularSubTotal()
    {
        return $this->quantidade * $this->produto->getValor();
    }

    public function getNomeDoProduto()
    {
        return $this->produto->getNome();
    }

    public function getValorProduto()
    {
        return $this->produto->getValor();
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
}
