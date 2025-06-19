<?php
include "database.php";
$livros = $db->query("SELECT * FROM livros")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Livros</title></head>
<body>
<h1>Lista de Livros</h1>
<ul>
<?php foreach ($livros as $livro): ?>
    <li><?= htmlspecialchars($livro['titulo']) ?> - <?= htmlspecialchars($livro['autor']) ?> (<?= $livro['ano'] ?>)
    <a href="delete_book.php?id=<?= $livro['id'] ?>">[Excluir]</a></li>
<?php endforeach; ?>
</ul>

<h2>Adicionar Livro</h2>
<form action="add_book.php" method="post">
    <input type="text" name="titulo" placeholder="Título"><br>
    <input type="text" name="autor" placeholder="Autor"><br>
    <input type="number" name="ano" placeholder="Ano"><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>