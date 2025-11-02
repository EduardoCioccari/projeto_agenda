<?php

$host = "localhost";
$dbname = "db_agenda";
$user = "root";
$pass = "";
$charset = "utf8mb4";

// Conexão no database através do PDO.
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);

    // Ativando modo de erros.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    $erro = $exception->getMessage();
    echo "Erro na conexação: $erro"; // Mensagem de erro.
}


/*
 PDO::ATTR_ERRMODE - Caso não seja possível armazenar o dado sou avisado pelo sistema.
 Sem isso, mesmo não armazenando o não faria o posto no database.
 */

 /*
PDO::ERRMODE_EXCEPTION - o PDO lançará imediatamente uma exceção,
interrompendo a execução normal do script naquele ponto e indicando o erro.
 */

/*
PDO::PARAM_STR - Forma de garantir que toda informação recebida no input será considerada uma string pelo db.
PDO::PARAM_INT - Forma de garantir que toda informação recebida no input será considerada número inteiro pelo db.
*/

/*
PDO::FETCH_ASSOC - Cria um array associativo com os dados do db. Por exemplo, ['nome' => 'Eduardo'], sendo que
'nome' é o nome da coluna no db. Isso permite que eu chame a info pelo nome dela, por exemplo $usuario['nome'], 
onde a variável $usuario vai receber a informação da coluna 'nome'
*/

/*
PDO::ATTR_DEFAULT_FETCH_MODE - Define como os dados serão retornados do db, como por exemplo, em array associativo,
como um objeto, etc. Com essa constante podemos definir um formato padrão para as buscas no db.
*/

/*
PDO::ATTR_EMULATE_PREPARES - definindo como false, força o PDO a usar consultas nativas do banco de dados.
É uma boa prática de segurança.
*/