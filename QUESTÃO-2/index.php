<?php
include "database.php";
$tarefas = $banco->query("SELECT * FROM tarefas")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Lista de Tarefas</title></head>
<body>
<h1>Minhas Tarefas</h1>

<h2>Tarefas Pendentes</h2>
<ul>
<?php foreach ($tarefas as $tarefa): ?>
    <?php if (!$tarefa["concluida"]): ?>
        <li><?= htmlspecialchars($tarefa["descricao"]) ?> - até <?= $tarefa["vencimento"] ?>
        <a href="update_tarefa.php?id=<?= $tarefa["id"] ?>">[Concluir]</a>
        <a href="delete_tarefa.php?id=<?= $tarefa["id"] ?>">[Excluir]</a></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>

<h2>Tarefas Concluídas</h2>
<ul>
<?php foreach ($tarefas as $tarefa): ?>
    <?php if ($tarefa["concluida"]): ?>
        <li><s><?= htmlspecialchars($tarefa["descricao"]) ?> - até <?= $tarefa["vencimento"] ?></s></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>

<h2>Adicionar Tarefa</h2>
<form action="add_tarefa.php" method="post">
    <input type="text" name="descricao" placeholder="Descrição"><br>
    <input type="date" name="vencimento"><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>