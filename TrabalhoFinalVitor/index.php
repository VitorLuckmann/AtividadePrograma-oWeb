<?php

include 'controller/controller_pessoa.php';

session_start();

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        header('Location: /login');
    break;

    case '/login':
        if (isset($_SESSION['pescodigo'])) {
            header('Location: /home');
            exit();
        }
        PessoaController::login();
    break;

    case '/logout':
        PessoaController::logout();
    break;

    case '/cadastro':
        if (isset($_SESSION['pescodigo'])) {
            header('Location: /home');
            exit();
        }
        PessoaController::cadastro();
    break;

    case '/home':
        if (!isset($_SESSION['pescodigo'])) {
            header('Location: /home');
            exit();
        }
        require_once 'view/home.php';
    break;

    case '/pessoa':
        if (!isset($_SESSION['pescodigo'])) {
            header('Location: /login');
            exit();
        }
        PessoaController::index();
    break;

    case '/pessoa/form/insert':
        PessoaController::insert();
    break;

    default:
        echo '
            <script src="https://cdn.tailwindcss.com"></script>
            <h1 class="text-4xl text-center w-full h-full">Página não encontrada - <strong>Erro 404</strong> </h1>
        ';
    break;
}