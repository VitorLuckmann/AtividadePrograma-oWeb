<?php
    class jogador {
        private string $nome;
        private string $posicao;
        private DateTime $data_nascimento;

        // Getters
        public function getNome(): string {
            return $this->nome;
        }

        public function getPosicao(): string {
            return $this->posicao;
        }

        public function getDataNascimento(): DateTime {
            return $this->data_nascimento;
        }

        // Setters
        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        public function setPosicao(string $posicao): void {
            $this->posicao = $posicao;
        }

        public function setDataNascimento(DateTime $data_nascimento): void {
            $this->data_nascimento = $data_nascimento;
        }
    }
?>