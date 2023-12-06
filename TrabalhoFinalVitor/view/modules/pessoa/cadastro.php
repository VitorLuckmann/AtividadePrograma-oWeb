<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <div class="w-full h-screen flex justify-center items-center ">
        <form action="/pessoa/form/insert" method="post" class="space-y-3 flex flex-col">
            <div>
                <label for="nome">Nome:</label>
                <input class="border text-xs p-1 w-full" type="text" id="pesnome" name="pesnome">
            </div>
            <div>
                <label for="sobrenome">Sobrenome:</label>
                <input class="border text-xs p-1 w-full" type="text" id="pessobrenome" name="pessobrenome">
            </div>
            <div>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input class="border text-xs p-1 w-full" type="date" id="pesdatanascimento" name="pesdatanascimento">
            </div>
            <div>
                <label for="email">E-Mail:</label>
                <input class="border text-xs p-1 w-full" type="text" id="pesemail" name="pesemail">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input class="border text-xs p-1 w-full" type="password" id="pessenha" name="pessenha">
            </div>
            <div class="w-full flex flex-col justify-center gap-2">
                <button class="transition-all px-4 py-2 border shadow-sm hover:shadow-sm hover:opacity-80" type="submit">Efetuar Cadastro</button>
                <a class="text-center transition-all underline px-4 py-2 hover:opacity-80" href="/login">Login</a>
            </div>
        </form>
    </div>
</body>
</html>