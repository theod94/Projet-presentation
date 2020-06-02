<?php
session_start();
require_once('connexion_base_de_donnees.php');

if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $reponse = $bdd->prepare("SELECT * FROM admin where email=:email");
    $reponse->execute(['email' => $email]);
    $resultat = $reponse->fetch();
    //   var_dump($resultat);
    if (count($resultat) > 0 && password_verify($password, $resultat['password'])) {
        $_SESSION['email'] = $resultat['email'];
        $_SESSION['id'] = $resultat['id'];
        header('location: accueil_administrateur.php');
    } else {
        $erreur = 'Non valide';
    };
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Partie administrateur</title>
</head>



<body class="body">


    <header>
        <?php
        require_once('include/header.php');
        ?>
    </header>

        <section class="col-12 d-flex align-items-center justify-content-center p-5">
            <div class="col-8 formulaire_de_connexion">
                <form action="" method="post">
                    <label class="col-5" for="">Email : </label>
                    <input class="col-6 p-0" type="email" name="email">

                    <label class="col-5" for="">Password : </label>
                    <input class="col-6 p-0" type="password" name="password">
                    <div class="d-flex justify-content-center p-3">
                        <button type="submit" name="login" class="btn btn-success">Connexion</button>
                    </div>

                </form>

                <?php

                if (isset($erreur)) {
                    echo "<div><span>$erreur</span></div>";
                }

                ?>

            </div>
        </section>

</body>

</html>