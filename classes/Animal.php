<?php

    abstract class Animal {

        protected $reino = "Animal";
        protected $pele;
        protected $ambiente;

        abstract function respirar();
        abstract function locomover();
        abstract function emitirSom();

    }

?>