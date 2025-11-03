<?php

session_start();

include_once("connection.php");
include_once("url.php");

// Inicializando como array vazio a variável que receberá os dados.
$contacts = [];

// Consultando a tabela.
$query = "SELECT * FROM contacts";

// Tratando os dados por segurança.
$stmt = $conn->prepare($query);

$stmt->execute();

// Incluindo todos os dados da tabela em uma variável.
$contacts = $stmt->fetchAll();
