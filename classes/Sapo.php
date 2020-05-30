<?php

    require_once("./classes/Anfibio.php");

    class Sapo extends Anfibio {

        public function locomover() {
            return "Pulo";
        }

        public function getEspecificidade()
        {
            return $this->seTransformar();
        }

        public function seTransformar() {
            return "De girino virei sapo";
        }

    }

?>