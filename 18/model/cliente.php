<?php
class Cliente {
    // Atributos
    private $nome;
    private $cpf;

    // Método construtor
    public function __construct($nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function __toString() {
        return "Nome: $this->nome - CPF: $this->cpf";
    }
}
?>