<?php
class CalcularDesconto{
    public function CalcularDesconto($desconto, $pedido) {
        return $pedido->calcularTotal() - $desconto->Calcula($pedido);

    }
}