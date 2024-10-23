<?php include_once("templates/header.php") ?>
    
<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.php") ?>
    <h1 id="main-title"><?= $contact['name'] ?></h1>
    <div class="custom-hr"></div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row" class="bold">Telefone:</th>
                    <td><?= $contact['phone'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="bold">Descrição:</th>
                    <td><?= $contact['observations'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include_once("templates/footer.php") ?>