<?php

// Definição da calsse abstratra Personagem
abstract class Personagem {
    // Atributos protegidos para encapsulamento
    protected $nome;
    protected $pontosVida;    
    protected $poderAtaque;
    private $vivo;

    // Método construtor
    public function __construct($nome, $pontosVida, $poderAtaque)
    {
        $this->nome = $nome;
        $this->pontosVida = $pontosVida;
        $this->poderAtaque = $poderAtaque;
        $this->vivo = true;
    }

    // Método para exibir dados do personagem
    public function exibirDados() {
        echo "Nome: {$this->nome}, Pontos de Vida: {$this->pontosVida}, Vivo: " . 
        ($this->vivo? 'Sim' : 'Não') . "<br>";
    }

    public function sofrerDano($danoSofrido) {
        $this->pontosVida -= $danoSofrido;

        if($this->pontosVida <= 0) {
            $this->morrer();
        }
    }

    public function recuperarVida() {

    }

    private function morrer() {
        $this->vivo = false;
        echo "{$this->nome} morreu. <br>";
    }
}

class Guerreiro extends Personagem {
    
}

// Não é possível instanciar um objeto a partir de uma classe abstrata
//$personagem1 = new Personagem();

$guerreiro = new Guerreiro("Aragorn", 100, 20);
echo "Dados do Guerreiro: <br>";
$guerreiro->exibirDados();

$guerreiro->sofrerDano(120);
echo "Sofreu dano de 120";
$guerreiro->exibirDados();
?>