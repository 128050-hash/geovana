<?php
require_once "conecta.php";

$sql = "SELECT id, nome, cpf FROM aluno";

$stmt = $conexao->query($sql);

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>

<h1>Lista de Alunos</h1>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
</tr>

<?php foreach ($alunos as $aluno): ?>

<tr>
    <td><?= htmlspecialchars($aluno['id']) ?></td>
    <td><?= htmlspecialchars($aluno['nome']) ?></td>
    <td><?= htmlspecialchars($aluno['cpf']) ?></td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>