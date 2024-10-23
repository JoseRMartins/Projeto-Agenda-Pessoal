<?php include_once("templates/header.php") ?>
        
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Meus Contados</h1>
        <?php if(count($contacts) > 0): ?>
            
            <table class="table table-striped" id="contacts-table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row" class="col-id"> <?= $contact['id'] ?> </td>
                            <td scope="row"> <?= $contact['name'] ?> </td>
                            <td scope="row"> <?= $contact['phone'] ?> </td>
                            <td class="action">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>">
                                    <i class="fas fa-eye check-icon mx-2"></i>
                                </a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id'] ?>"><i class="far fa-edit edit-icon mx-2"></i></a>
                                <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="post">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                    <button type="submit" class="btn-delete mx-2"><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php else: ?>
            <p id="empty-list-next">Sua agenda não tem contatos! <a class="btn btn-primary" href="<?= $BASE_URL ?>create.php">Adicionar</a></p>
        <?php endif; ?>
    </div>

<?php include_once("templates/footer.php") ?>