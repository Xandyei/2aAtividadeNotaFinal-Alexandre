<?php
if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["ano"])) {
    include "database.php";

    $comando = $banco->prepare("INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)");
    $comando->execute([$_POST["titulo"], $_POST["autor"], $_POST["ano"]]);
    
    header("Location: index.php");
    exit();
}
?>