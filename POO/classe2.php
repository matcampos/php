<?php
    class Carro{
        private $modelo;
        private $cor;

        public function getModelo(){
            return $this->modelo;
        }   

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function exibir(){
            return array(
                "modelo"=>$this->getModelo(),
                "cor"=>$this->getCor()
            );
        }
     }

     $ferrari = new Carro();

     $ferrari->setModelo('California');
     $ferrari->setCor('Vermelho');

     print_r($ferrari->exibir());
?>