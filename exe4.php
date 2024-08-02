<?php

class Animal {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setIdade($novaIdade) {
        $this->idade = $novaIdade;
    }
}


class Cachorro extends Animal {

    public function getIdade() {
        return "A idade do cachorro é: " . parent::getIdade();
    }
}

// Exemplo de uso
$cachorro = new Cachorro("dogee", 70);
echo $cachorro->getNome(); 
echo "<br>";
echo $cachorro->getIdade();


$cachorro->setNome("snoop-dogg");
$cachorro->setIdade(90);

echo "<br>";
echo $cachorro->getNome();
echo "<br>";
echo $cachorro->getIdade();
?>