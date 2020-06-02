<?php
session_start();
require_once('connexion_base_de_donnees.php');
require_once('include/config.php')
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil admin</title>
</head>

<body>
    <header>
        <?php
        require_once('admin/header_admin.php');
        ?>
    </header>

    <main>
        <section class="d-flex">


            <?php
            require_once('admin/menu_gauche_admin.php');
            ?>

            <div class="page_centrale col-10">

            </div>

        </section>

    </main>
</body>

</html>