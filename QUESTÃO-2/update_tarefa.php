<?php
if (isset($_GET["id"])) {
    include "database.php";
    $comando = $banco->prepare("UPDATE tarefas SET concluida = 1 WHERE id = ?");
    $comando->execute([$_GET["id"]]);
    header("Location: index.php");
    exit();
}
?>