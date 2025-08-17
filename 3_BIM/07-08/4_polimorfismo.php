<?php

    class Forma {
        public function desenhar(){
            echo "Desenheando algo";
        }
    }


    class Circulo extends Forma{
        public function desenhar(){
            echo "desenhando um criculo";
        }
    }

    $figura = new Circulo();
    $figura->desenhar();
?>