<?php

require_once "conexao.php";

// Buscar os depoimentos cadastrados
$sql = "SELECT * FROM depoimentos ORDER BY data DESC";

$stmt = $conexao->prepare($sql);

$stmt->execute();

$depoimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>