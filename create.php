<?php include_once("templates/header.php") ?>
        
    <div class="container">
        <?php include_once("templates/backbtn.php") ?>
        <h1 id="main-title">Novo Contado</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group mt-3">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group mt-3">
                <label for="observations">Descrição:</label>
                <textarea type="text" class="form-control mt-2" id="observations" name="observations" placeholder="Insira a descrição do contado" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
        </form>
    </div>

<?php include_once("templates/footer.php") ?>