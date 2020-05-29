<?php

    require_once("./classes/Animal.php");

    class AnimalVertebrado extends Animal {

        protected $esqueleto = "Possui esqueleto";
        protected $musculo = "Possui musculatura";

        // Método Getter - nos permite acessar uma propriedade Protegida (ou Privada se estivermos dentro da mesma classe)
        public function getReino() {
            return $this->reino;
        }

        public function getEsqueleto() {
            return $this->esqueleto;
        }

        public function getMusculo() {
            return $this->musculo;
        }

        public function getPele() {
            return $this->pele;
        }

        public function getAmbiente() {
            return $this->ambiente;
        }

        public function respirar()
        {
            return "Respira (genérico)";
        }

        public function locomover()
        {
            return "Locomove-se (genérico)";
        }

        public function emitirSom()
        {
            return "Emite som (genérico)";
        }

    }


?>