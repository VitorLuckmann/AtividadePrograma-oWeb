<?php 
    require_once"jogador.php";
    class time {
        private string $nome;
        private int $ano_fundacao;
        private array $jogadores;

        // Add jogador
        public function addJogador(jogador $jogador): void {
            $this->jogadores[] = $jogador;
        }
        // Get jogadores
        public function getJogadores(): array {
            return $this->jogadores;
        }

        public function getNome(): string {
            return $this->nome;
        }
    }

?>