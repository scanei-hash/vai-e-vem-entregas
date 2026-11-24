<?php

require_once "conexao.php";

// Receber os dados enviados pelo formulário
$nome = $_POST["nome"];
$depoimento = $_POST["depoimento"];
$data = $_POST["data"];

// Preparar o comando SQL
$sql = "INSERT INTO depoimentos (nome, depoimento, data)
        VALUES (:nome, :depoimento, :data)";

// Preparar a execução
$stmt = $conexao->prepare($sql);

// Associar os valores
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":depoimento", $depoimento);
$stmt->bindValue(":data", $data);

// Gravar no banco
$stmt->execute();

header("Location: index.php#depoimentos");
exit;