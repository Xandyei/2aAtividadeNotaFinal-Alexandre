<?php
$banco = new PDO("sqlite:tarefas.db");
$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$banco->exec("CREATE TABLE IF NOT EXISTS tarefas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    descricao TEXT,
    vencimento TEXT,
    concluida INTEGER DEFAULT 0
)");
?>