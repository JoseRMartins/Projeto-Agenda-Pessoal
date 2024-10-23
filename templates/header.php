<?php 

include_once("config/process.php");

if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pessoal</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-aweson -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
     <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand d-inline-block rounded-circle overflow-hidden mx-5" href="<?php $BASE_URL ?>index.php">
                <img class="rounded-circle img-fluid" src="<?php $BASE_URL ?>img/logo.png" alt="Agenda-Logo">
            </a>

            <div>
                <div class="navbar-nav">
                    <a class="nav-link active d-none d-lg-block" id="home-link" href="<?php $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link active p-2" id="home-link" href="<?php $BASE_URL ?>create.php">Adicionar Contado</a>
                </div>
            </div>
        </nav>
    </header>