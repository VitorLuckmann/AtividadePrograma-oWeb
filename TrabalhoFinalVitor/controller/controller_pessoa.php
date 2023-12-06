<?php 

class PessoaController
{
    public static function index()
    {
        include 'model/model_pessoa.php';
        $pessoa_model = new PessoaModel();
        $pesnome = '';
        if (isset($_GET['pesnome'])) {
            $pesnome = $_GET['pesnome'];
        }
        if ($pesnome != '') {
            $pessoas = $pessoa_model->getPessoasByNameIlike($pesnome);
        } else {
            $pessoas = $pessoa_model->getPessoas();
        }
        include 'view/modules/pessoa/pessoa.php';
    }

    public static function login()
    {
        include 'view/modules/pessoa/login.php';
    }
    public static function logout()
    {
        include 'view/modules/pessoa/logout.php';
    }

    public static function cadastro()
    {
        include 'view/modules/pessoa/cadastro.php';
    }

    public static function insert()
    {
        include 'model/model_pessoa.php';
        $model = new PessoaModel();
        $model->setPesnome($_POST['pesnome']);
        $model->setPessobrenome($_POST['pessobrenome']);
        $model->setPesdatanascimento($_POST['pesdatanascimento']);
        $model->setPesemail($_POST['pesemail']);
        $model->setPessenha($_POST['pessenha']);

        if ($model->getPesnome() == '' || $model->getPessobrenome() == '' || $model->getPesdatanascimento() == '' || $model->getPesemail() == '' || $model->getPessenha() == '') {
            header('Location: /cadastro');
            exit();
        }
        $model->insert();
        header('Location: /login');
    }
}