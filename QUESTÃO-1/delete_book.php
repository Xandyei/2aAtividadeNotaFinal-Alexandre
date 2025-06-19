<?php

if (isset($_GET["id"])) {
    include "database.php";

    $comando = $banco->prepare("DELETE FROM livros WHERE id = ?");
    $comando->execute([$_GET["id"]]);
    
    header("Location: index.php");
    exit();
}
?>