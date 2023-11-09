<?php
    class computador {
        private $isLigado = false;

        public function ligar() {
            $this->isLigado = true;
        }

        public function desligar() {
            $this->isLigado = false;
        }

        public function status() {
            return $this->isLigado;
        }

    }
?>