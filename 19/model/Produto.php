<?php

class Produto implements JsonSerializable{
    private $id;
    private $nome;
    private $descricao;
    private $preco; 

    public function __construct($id, $nome, $descricao,$preco){

        $this->id= $id;
        $this->nome= $nome; 
        $this->descricao= $descricao; 
        $this->preco= $preco;
    }

    public function jsonSerialize(): array {
        return [
            'id' =>$this->id,
            'nome'=>$this->nome,
            'descricao'=>$this->descricao,
            'preco'=>$this->preco
        ];
    }
    
        
    }

?>