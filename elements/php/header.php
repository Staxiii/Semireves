<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="elements/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="elements/css/seminaires.css">
    <link rel="stylesheet" href="elements/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <title>Index</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo">
                <img src="elements/images/logo.png">
                <p class="text-logo">Sémirêves</p>
            </a>
            <div class="navigation">
            <a href="index.php">Accueil</a>
                <?php if (isset($_SESSION['username'])) {
                echo "<a href='reservation.php'>Réservation</a>";
                }?>
                <a href="seminaires.php">Séminaires</a>
                <a href="qui-sommes-nous.php">Qui sommes-nous ?</a>
                <?php if (isset($_SESSION['rank']) === "Administrateur") {
                echo "<a href='connexion.php'>Administration</a>"; }
                ?>
            </div>
            <div class="compte">

                <?php if (isset($_SESSION['username'])) {
                echo "<a class='bouton-plein' href='elements/php/deconnexion.php'>Déconnexion</a>";
                }
                else if (!isset($_SESSION['username'])) {
                echo "<a class='bouton-vide' href='connexion.php'>Connexion</a>";
                echo "<a class='bouton-plein' href='inscription.php'>Inscription</a>";
                }?>
            </div>
        </nav>
    </header>