<?php
$banco = new PDO("sqlite:livros.db");
$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$banco->exec("CREATE TABLE IF NOT EXISTS livros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT,
    autor TEXT,
    ano INTEGER
)");
?>