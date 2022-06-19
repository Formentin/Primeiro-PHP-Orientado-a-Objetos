<?php
class Produto{
    private $nome, $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getNome(){
        return $this->nome;
    }
}