<?php
    require_once 'model/model_pessoa.php';

    $pessoa_model = new PessoaModel();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pesemail     = $_POST['pesemail'];
        $pessoa_senha = $_POST['pessenha'];

        $pessoa = $pessoa_model->getPessoaByEmailSenha($pesemail, $pessoa_senha);
        
        if ($pessoa) {
            $_SESSION['pesnome'] = $pessoa['pesnome'];
            $_SESSION['pescodigo'] = $pessoa['pescodigo'];
            header('Location: /home');
            exit();
        } else {
            $error = 'E-Mail/Senha incorretos';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="w-full h-[100dvh] flex flex-col justify-center items-center">
        <form method="post" class="space-y-2">
            <div>
                <label for="email">E-Mail:</label>
                <input class="border text-xs p-1 w-52" type="text" id="pesemail" name="pesemail">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input class="border text-xs p-1 w-52" type="password" id="pessenha" name="pessenha">
            </div>
            <?php if (isset($error)): ?>
                <p class="text-center"><?php echo $error; ?></a>
            <?php endif; ?>
            <div class="flex flex-col justify-center gap-2 pt-3">
                <button class="transition-all px-4 py-2 border shadow-sm  hover:opacity-80" type="submit">Login</button>
                <a class="text-center transition-all px-4 py-2 underline hover:opacity-80" href="/cadastro">Cadastrar</a>
            </div>        
        </form>
    </div>
</body>
</html>