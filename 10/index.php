<?php

class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;

    // Método Construtor
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Função / Comportamento / Método
    public function ligar() {
        echo "O carro está ligado. <br>";
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2022); // instancia um novo objeto do tipo Carro

echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano";
$meuCarro->ligar(); // Chama a função ligar do objeto meuCarro

?>