<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Okimono 置物</title>
    <link rel="stylesheet" href="<?= $base ?>stylesheets/styleee.css" />
    <script src="https://kit.fontawesome.com/8a2d35d848.js" crossorigin="anonymous"></script>
</head>

<body id="contenu">
    <nav>
        <h1><a href="index.php">Okimono 置物</a></h1>
        <a class="nav-open" href="#contenu"> <i class="fas fa-bars"></i> </a>
        <a class="nav-close" href="#"> <i class="fas fa-times"></i> </a>
        <div class="onglets">
            <a href="<?= $base ?>index.php">Accueil</a>
            <a href="<?= $base ?>pages/creation.php">Création</a>
            <a href="<?= $base ?>pages/contact.php">Contact</a>
            <form>
                <input type="search" placeholder="Rechercher">
            </form>

        </div>
    </nav>

    <figure>
        <img src="<?= $base ?>images/fond.jpg" alt="bandeau">
    </figure>