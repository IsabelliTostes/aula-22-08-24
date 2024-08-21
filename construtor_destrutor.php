<?php
//criamos construtor e destrutor, objetos podem ser contruidos e destruidos..
    class Pessoa {

        public $nome = null;

        function __construct($nome) {// para usarmor a função construct
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }
        function __destruct() {//usarmos a função destruct
            echo 'Objeto removido';
        }


        function __get($atributo) { //__get método magico, ele atribui um valor a qualquer variavel.
            return $this->$atributo;
        }

        function correr() {
           return $this->__get('nome') . 'esta correndo!';
        }
    }
    

 $pessoa = new Pessoa('Isabelli');//new Pessoa porq é outra pessoa, outro nome.

 //echo ' <br/> Nome: ' . $pessoa->__get('nome');

 //echo $pessoa-> correr();
 
 unset($pessoa);//acaba com tudo, destroi a variavel.

 echo ($pessoa);//testando
?>