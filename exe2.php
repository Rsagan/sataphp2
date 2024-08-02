<?php
class Livro {
  
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }
    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
    public function imprimir() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
    }
}

$livro = new Livro("biblia", "satanais");

echo "Informações do livro original:<br>";
$livro->imprimir();

$livro->setTitulo("programaçao");
$livro->setAutor("mestre dos magos");

echo "<br>Informações do livro após alteração:<br>";
$livro->imprimir();
?>