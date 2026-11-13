<?php
require_once "conecta.php";

$cpf = $_POST['cpf'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "SELECT * FROM aluno
        WHERE cpf = :cpf AND senha = :senha";

$stmt = $conexao->prepare($sql);

$stmt->execute([
    ':cpf' => $cpf,
    ':senha' => $senha
]);

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

if ($aluno) {
    echo "Bem-vindo, " .
    htmlspecialchars($aluno['nome']);
} else {
    echo "CPF ou senha incorretos!";
}
?>