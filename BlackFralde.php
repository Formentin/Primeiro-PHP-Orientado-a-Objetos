<?php
class BlackFralde implements IDesconto
{
    private $descricao, $porcentagem;
    
    function __construct( $descricao, $porcentagem){
        $this->descricao = $descricao;
        $this->porcentagem = $porcentagem;
    }

    public function Calcula(Pedido $pedido){
        return $pedido->calcularTotal() * ($this->porcentagem/100);
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
}
