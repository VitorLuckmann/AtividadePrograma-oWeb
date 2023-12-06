<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lista Pessoas</title>
</head>
<body class="bg-zinc-100">
    <?php require_once 'view/modules/ui.php';
        echo getNavbar();
    ?>
    <div class="w-full h-screen grid justify-center items-center content-center gap-3">
        <div class="flex"> 
            <input 
                class="border p-2 shadow-sm" 
                type="text" 
                placeholder="Busca por nome"
                onkeypress="if(event.keyCode == 13) window.location.href = '/pessoa?pesnome='+this.value"
            >
        </div>
        <div class="border shadow-sm bg-white">
            <table class="text-center">
                <tr class="border-b">
                    <th class="px-3 py-2">Codigo</th>
                    <th class="px-3 py-2">Nome</th>
                    <th class="px-3 py-2">Sobrenome</th>
                    <th class="px-3 py-2">Data de Nascimento</th>
                    <th class="px-3 py-2">E-Mail</th>
                </tr>
                <?php foreach($pessoas as $pessoa): ?>
                    <tr>
                        <td class="px-3 py-2 border-r border-b"><?= $pessoa->pescodigo ?></td>
                        <td class="px-3 py-2 border-r border-b"><?= $pessoa->pesnome ?></td>
                        <td class="px-3 py-2 border-r border-b"><?= $pessoa->pessobrenome ?></td>
                        <td class="px-3 py-2 border-r border-b"><?= $pessoa->pesdatanascimento ?></td>
                        <td class="px-3 py-2 border-b"><?= $pessoa->pesemail ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>