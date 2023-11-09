<?php
    require_once"time.php";
    require_once"jogador.php";
    class jogo {
        private time $timeA;
        private time $timeB;
        private array $gols; 

        public function addGol(time $time, jogador $jogador): int {
            $this->gols[] = new gol($jogador, $time);
            return count($this->gols);
        }

        public function getNomeTimeVencedor(): string {
            function getGols(time $time, array $gols): int {
                foreach ($gols as $gol) {
                    if ($gol->getTime() == $time) {
                        $gols++;
                    }
                }
                return $gols;
            }

            $golsA = getGols($this->timeA, $this->gols);
            $golsB = getGols($this->timeB, $this->gols);

            if ($golsA > $golsB) {
                return $this->timeA->getNome();
            } else if ($golsB > $golsA) {
                return $this->timeB->getNome();
            } else {
                return "Empate";
            }
        }
    }
?>