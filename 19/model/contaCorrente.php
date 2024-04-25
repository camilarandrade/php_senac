<?php

require_once './18/model/conta.php';

class ContaCorrente extends Conta {
    // Atributos específicos da ContaCorrente
    private $limiteChequeEspecial;

    // Método construtor
    public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
        parent::__construct($cliente, $numero, $saldo);
        $this->limiteChequeEspecial = $limiteChequeEspecial;
    }

    // Método para com limite do cheque especial (Virtual)
    public function sacar($valorSaque) {
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;
        if($valorSaque <= $valorLimiteEspecial) {
            return parent::sacar($valorSaque);
        }

        return false;
    }
}
?>