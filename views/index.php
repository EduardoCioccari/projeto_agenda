<?php
include_once("header.php");
?>
<div class="container">
    <!-- Validação do sucesso do cadastro para o usuário antes de direciona-lo para home -->
    <?php if (isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?php $printMsg ?></p>
    <?php endif; ?>

    <h1 class="main-title">Minha Agenda</h1>

    <!-- Se tiver contatos, apresenta-los, se não instigar a cadastrar -->
    <?php if (count($contacts) > 0): ?>
        <p>TEM CONTATOS</p>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há contatos na sua agenda. Clique em <a href="create.php">adicionar contatos</a> para cadastrar.</p>
    <?php endif; ?>
</div>
<?php
include_once("footer.php");
?>