<?php

class PessoaDAO
{
    public $conection;

    public function __construct()
    {
       $this->conection = new PDO('pgsql:host=localhost;dbname=postgres', 'postgres', '');
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO tbpessoa (pesnome, pessobrenome, pesdatanascimento, pesemail, pessenha) VALUES (:pesnome, :pessobrenome, :pesdatanascimento, :pesemail, :pessenha)";

        $stmt = $this->conection->prepare($sql);
        $stmt->bindValue(':pesnome', $model->getPesnome());
        $stmt->bindValue(':pessobrenome', $model->getPessobrenome());
        $stmt->bindValue(':pesdatanascimento', $model->getPesdatanascimento());
        $stmt->bindValue(':pesemail', $model->getPesemail());
        $stmt->bindValue(':pessenha', $model->getPessenha());

        $stmt->execute();
    }

    public function getPessoas()
    {
        $sql = "SELECT * FROM tbpessoa";

        $stmt = $this->conection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function getPessoasByNameIlike($pesnome)
    {
        $sql = "SELECT * FROM tbpessoa WHERE pesnome ILIKE '%$pesnome%'";

        $stmt = $this->conection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}