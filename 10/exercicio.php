<?php
/*
1 - Defina uma classe chamada Veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veículo está ligado ou desligado)

2 - Implemente um método construtor na classe Veiculo que inicialize as propriedades marca, modelo e ano. O método construtor também deve definir a propriedade "ligado" como false por padrão.
3 - Implementar métodos na classe Veículo:
- ligar(): Este método deve alterar a propriedade "ligado" pra true, se o veículo estiver desligado.
- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
*/
class Veiculo {
    public $marca;
    public $modelo;
    public $ano;
    public $ligado;

    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->ligado = false;
    }

    public function ligar() {
        $this->ligado == false ? $this->ligado = true : null;
    }

    public function desligar() {
        $this->ligado == true ? $this->ligado = false : null;
    }

    public function exibirDados() {
        echo "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano, Ligado: $this->ligado <br>";
    }
}
$meuCarro = new Veiculo("Toyota", "Corolla", 2022);

// Exibindo dados do veículo
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false

// Ligando o veículo
$meuCarro->ligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: true

// Desliga o veículo
$meuCarro->desligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false

?>