<?php
class Usuario{

    # definição de atributos
    public $nome;
    # a partir do php 7.4
    public string $sobrenome;

    # método construtor
    # é o método que  é execitado automaticamente 
    # quando um objeto é instanciado
    function __construct(string $nome)
    {
        $this->nome = $nome;
    }
    # método para retornar o nome completo
    function getNomeCompleto(){
        return "$this->nome $this->sobrenome";
    }

    # objeto como uma função
    function __invoke()
    {
        echo '<hr>';
        echo $this->getNomeCompleto();
    }

    function __set($nome, $valor){
        echo "<p>Foi chamado o atributo $nome com valor $valor</p>";
    }

    # é chamado quando tentar pegar valor de um atributo inexistente
    function __get($nome){
        echo "<p>Foi chamado o atributo inexistente $nome</p>";
    }
}