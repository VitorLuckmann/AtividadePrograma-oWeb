<?php
    session_start();

    if (!isset($_SESSION["jovenir"]) || !isset($_SESSION["login_time"]) || !isset($_SESSION["last_request_time"])) {
        echo '<script>alert("Os dados da sessão foram perdidos. Por favor, faça login novamente.");</script>';
        header("Location: login.php");
        exit();
    }

    $_SESSION["last_request_time"] = time();
    $session_duration = time() - $_SESSION["login_time"];

    echo "Bem-vindo, " . $_SESSION["jovenir"] . "!<br>";
    echo "Data/hora de início da sessão: " . date("Y-m-d H:i:s", $_SESSION["login_time"]) . "<br>";
    echo "Data/hora da última requisição: " . date("Y-m-d H:i:s", $_SESSION["last_request_time"]) . "<br>";
    echo "Tempo de sessão: " . gmdate("H:i:s", $session_duration);
?>