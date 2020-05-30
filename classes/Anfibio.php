<?php

    require_once("./classes/AnimalVertebrado.php");

    class Anfibio extends AnimalVertebrado {

        private $especificidade;

        public function __construct()
        {
            $this->especificidade = "Mutam a respiração ao longo do tempo";
            $this->pele = "Pele lisa e úmida";
            $this->ambiente = "Aquático/Terrestre";
            $this->icon = "frog";
        }

        public function respirar() {
            return "Brânquias/Pulmões";
        }

        public function locomover() {
            return "Nado/Pulo";
        }

        public function emitirSom() {
            return "Wrébit Wrébit";
        }

        public function getEspecificidade() {
            return $this->especificidade;
        }

        public function setEspecificidade($especificidadeRecebida) {
            $this->especificidade = $especificidadeRecebida;
        }

    }

?>