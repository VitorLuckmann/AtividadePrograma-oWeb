<?php

require_once 'DAO/dao_pessoa.php';

class PessoaModel
{
    private $pescodigo, $pesnome, $pessobrenome, $pesdatanascimento, $pesemail, $pessenha;

    public function insert()
    {
        $dao = new PessoaDAO();
        $dao->insert($this);
    }

    public function getPessoasByNameIlike($pesnome)
    {
        $dao = new PessoaDAO();
        return $dao->getPessoasByNameIlike($pesnome); 
    }

    public function getPessoas()
    {
        $dao = new PessoaDAO();
        return $dao->getPessoas();
    }
    public function getPessoaByEmailSenha($pesemail, $pessenha)
    {
        $dao = new PessoaDAO();
        
        $connection = $dao->conection;

        $sql = 'SELECT * FROM tbpessoa WHERE pesemail = :pesemail AND pessenha = :pessenha';

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(':pesemail', $pesemail);
        $stmt->bindValue(':pessenha', $pessenha);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getPescodigo() {
        return $this->pescodigo;
    }
    
    public function setPescodigo($pescodigo) {
        $this->pescodigo = $pescodigo;
    }
    
    public function getPesnome() {
        return $this->pesnome;
    }
    
    public function setPesnome($pesnome) {
        $this->pesnome = $pesnome;
    }
    
    public function getPessobrenome() {
        return $this->pessobrenome;
    }
    
    public function setPessobrenome($pessobrenome) {
        $this->pessobrenome = $pessobrenome;
    }
    
    public function getPesdatanascimento() {
        return $this->pesdatanascimento;
    }
    
    public function setPesdatanascimento($pesdatanascimento) {
        $this->pesdatanascimento = $pesdatanascimento;
    }
    
    public function getPesemail() {
        return $this->pesemail;
    }
    
    public function setPesemail($pesemail) {
        $this->pesemail = $pesemail;
    }
    
    public function getPessenha() {
        return $this->pessenha;
    }
    
    public function setPessenha($pessenha) {
        $this->pessenha = $pessenha;
    }
}