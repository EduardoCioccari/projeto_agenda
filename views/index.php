<?php
include_once("../config/url.php");
include_once("../config/conexao.php");

// Mensagem de sucesso/insucesso ao realizar ações com o database.
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>../public/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?php $BASE_URL ?>index.php">
                <img src="../public/img/logo.svg" alt="Logo da agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>create.php">Adicionar contato</a>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>