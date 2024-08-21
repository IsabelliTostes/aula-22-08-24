<?php

class Funcionario {

    //atributos
    public $nome= null;
    public $telefone= null;
    public $numFilhos= null;


        function setTelefone($telefone) {
          $this->telefone = $telefone;
        }

        function getTelefone() {
          return $this->telefone = $telefone;
        }

        // 2 
        //set pega o valor e get retorna o valor q esta pedindo

        function setNome($nome) {
          $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
          $this->numFilhos = $numFilhos;
        }

        function getNome() {
          return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }


    //funções e metodos
    function resumirCardFunc () {
        return "$this->nome e ela possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos ($numFilhos) {
      return $this->numFilhos = $numFilhos;
    }
}

//instaciei um metodo, porq qro q retorne uma string
$y=new Funcionario();
//$y= modificarNumFilhos(3) . '<br/>';
//echo $y->modificarNumFilhos(3) . '<br/>';
//echo $y->resumirCardFunc();

$y ->setNome('Monique');
$y ->setNumFilhos('0');

echo $y-> resumirCardFunc() . '<br/>';
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos ';



?>