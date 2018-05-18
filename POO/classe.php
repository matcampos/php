<?php 
    class Pessoa {
        public $nome; //Atributo

        public function falar(){ //Método
            return "Meu nome é " . $this->nome;
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus Campos";

    echo $matheus->falar();
?>