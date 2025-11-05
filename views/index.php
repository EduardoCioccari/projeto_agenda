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
        <!-- Cabeçalho da tabela -->
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <!-- Apresentando dados dos cadastrados -->
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?php echo $contact['id'] ?></td>
                        <td scope="row"><?php echo $contact['name'] ?></td>
                        <td scope="row"><?php echo $contact['phone'] ?></td>
                        <td class="actions">
                            <a href="#"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="far fa-edit check-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há contatos na sua agenda. Clique em <a href="create.php">adicionar contatos</a> para cadastrar.</p>
    <?php endif; ?>
</div>
<?php
include_once("footer.php");
?>