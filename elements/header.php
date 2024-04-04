<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <title>Index</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="logo.png"></a>
            </div>
            <div class="navigation">
                <a href="connexion.php">Réservation</a>
                <a href="connexion.php">Séminaires</a>
                <?php if (isset($_SESSION['rank']) === "Administrateur") {
                echo "<a href='connexion.php'>Administration</a>"; }
                ?>
            </div>
            <div class="compte">

                <?php if (isset($_SESSION['username'])) {
                echo "<a class='bouton-plein' href='elements/deconnexion.php'>Déconnexion</a>";
                }
                else if (!isset($_SESSION['username'])) {
                echo "<a class='bouton-vide' href='connexion.php'>Connexion</a>";
                echo "<a class='bouton-plein' href='inscription.php'>Inscription</a>";
                }?>
            </div>
        </nav>
    </header>