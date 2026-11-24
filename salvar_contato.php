<?php

require_once "conexao.php";

// Receber os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

// Preparar o comando SQL
$sql = "INSERT INTO contatos (nome, email, mensagem)
        VALUES (:nome, :email, :mensagem)";

$stmt = $conexao->prepare($sql);

// Associar os dados aos campos
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":mensagem", $mensagem);

// Executar o comando
$stmt->execute();

header("Location: index.php?contato=sucesso#contato");
exit;