<?php
    class gol {
        private datetime $tempo;
        private jogador $jogador;
        private time $time;

        public function __construct(jogador $jogador, time $time) {
            $this->tempo = new DateTime();
            $this->jogador = $jogador;
            $this->time = $time;
        }

        public function getTime(): time {
            return $this->time;
        }
    }
?>