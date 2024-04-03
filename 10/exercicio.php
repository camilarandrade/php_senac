<?php
/*
1 - Defina uma classe chamada Veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veículo está ligado ou desligado)
*/

class Veiculo {
    public $marca;
    public $modelo;
    public $ano;
    public $ligado;



/*
2 - Implemente um método construtor na classe Veiculo que inicialize as propriedades marca, modelo e ano. O método construtor também deve definir a propriedade "ligado" como false por padrão.
*/

public function __construct($marca, $modelo, $ano) 
{
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->ligado = false;
}



/*
3 - Implementar métodos na classe Veículo:
- ligar(): Este método deve alterar a propriedade "ligado" pra true, se o veículo estiver desligado.
- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
*/

public function ligar() {
    if ($this->ligado) {
        $this->ligado= true;
        echo "O veículo está ligado!";
        
    } else {
        "O veículo está desligado";
    }
} 

public function deligar(){
    if ($this->ligado){
        $this->ligado=false;
    }
}
}

?>