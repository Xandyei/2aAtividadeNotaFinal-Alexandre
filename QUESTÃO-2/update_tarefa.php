<?php
if (isset($_POST["descricao"]) && isset($_POST["vencimento"])) {
    include "database.php";

    $comando = $banco->prepare("INSERT INTO tarefas (descricao, vencimento) VALUES (?, ?)");
    $comando->execute([$_POST["descricao"], $_POST["vencimento"]]);
    header("Location: index.php");
    exit();
}
?>