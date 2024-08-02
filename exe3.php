<?php
     class animal{

        private $nome;
        private $idade;

        public function __construct($nome,$idade){
            $this->nome=$nome;
            $this->idade=$idade;
        }

        public function getnome(){
            return $this->nome;
        }
        public function getidade(){
            return $this->idade;
        }
        public function setnome($novonome){
            $this->nome=$novonome;
        }
        public function setidade($novaidade){
            $this->idade=$novaidade;
        }
     }   

     
    class Cachorro extends Animal {

    
    public function getIdade() {
        return "A idade do cachorro é: " . parent::getIdade();
    }
}

$cachorro = new Cachorro("dogee", 70);
echo $cachorro->getNome();
echo "<br>";
echo $cachorro->getIdade();
?>


