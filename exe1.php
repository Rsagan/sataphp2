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
    public function exibirInformacoes() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
    }
}

$livro = new Livro("biblia", "satanais");

$livro->exibirInformacoes();
?>