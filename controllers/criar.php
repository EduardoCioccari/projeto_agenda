<?php

require_once("../config/conexao.php");

// Inputs do formulário.
$nome = "Eduardo";
$idade = 24;
$email = "duducioccari@outlook.com";

try {
    // Inserir infos recebidas dos inputs no database.
    $sql = "INSERT INTO tb_user (nome, idade, email) VALUES (:nome, :idade, :email)";

    // Previne contra injeções SQL, porque separa a consulta dos dados. Neste caso, meu db sabe que a única ordem é armazenar um dado.
    $stmt = $pdo->prepare($sql);

    // Placeholder será substituido pelo valor da variável $nome. Tbm defini que o parâmetro será sempre string.
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);

    // Placeholder será substituido pelo valor da variável $nome. Tbm defini que o parâmetro será num int.
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    // Execução para que os dados sejam enviados para o database.
    $stmt->execute();

    echo "Cadastro realizado com sucesso!";
} catch (PDOException $e) {
    echo "Ocorreu um erro no cadastro: " . $e->getMessage();
}
/*
:nome - Na variável de inserção no banco ($sql), temos placeholders. São variaveis temporarias
que podem ser executadas várias vezes com diferentes valores, sem precisar rescrever a query
a cada input.
*/
