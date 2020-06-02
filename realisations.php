<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Réalisations</title>
</head>

<body>

    <?php
    require_once('include/header.php');
    ?>


    <main>
        <!------ Include the above in your HEAD tag ---------->

        <div class="container p-4">
            <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="gallery-title mt-4 text-center">Réalisations</h1>
                </div>

                <div class="col-md-12 text-center p-4">
                    <button class="btn btn-default filter-button" data-filter="all">TOUT</button>
                    <button class="btn btn-default filter-button" data-filter="SDB">SALLE DE BAIN</button>
                    <button class="btn btn-default filter-button" data-filter="AP">AMENAGEMENT PAYSAGER</button>
                    <button class="btn btn-default filter-button" data-filter="EV">ENTRETIEN EV</button>
                    <button class="btn btn-default filter-button" data-filter="piscine">PISCINE</button>
                    <button class="btn btn-default filter-button" data-filter="terrasse">TERRASSE</button>
                </div>
                <br />



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter terrasse">
                    <img src="img/terrasse.jpg" class="image_taille img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter terrasse">
                    <img src="img/terrasse(2).jpg" class="image_taille img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter SDB">
                    <img src="img/Salle_de_bain.jpg" class="image_taille img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter SDB">
                    <img src="img/Salle_de_bain(2).jpg" class="image_taille img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter AP">
                    <img src="img/Salle_de_bain(3)" class="image_taille img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter EA">
                    <img src="img/noir_et_blanc2.jpg" class="image_taille img-responsive">
                </div>
            </div>
        </div>
        </section>
    </main>

    <?php
    require_once('include/footer.php');
    ?>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>