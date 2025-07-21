<?php
// Sempre defina o timezone o mais cedo possível
date_default_timezone_set('America/Sao_Paulo');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefone = htmlspecialchars(trim($_POST['telefone']));
    $data = date("d/m/Y H:i"); // Deve estar correta agora

    $linha = [$data, $nome, $email, $telefone];
    $arquivo = 'inscricoes.csv';

    $fp = fopen($arquivo, 'a');
    fputcsv($fp, $linha, ';');
    fclose($fp);

    header("Location: index.php?sucesso=1");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
