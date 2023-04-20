<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epreuves/Catégories</title>
    <link rel="stylesheet" href="css/epreuve.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/favicon.png">
</head>
<body>
    <?php include("header.php");?>
    <h1 class="debut">Les Épreuves</h1>
    <section id="fond">
        <section id="epreuve">
            <div class="epreuve-container">
                <div class="paragraphe">
                    <p>Les épreuves sont au nombre de trois : deux pour les adultes (18ans et plus) et une pour les enfants (14 - 17 ans).
                    </p>
                </div>
            </div>
        </section>
        <h1>Les Catégories</h1>
        <section class="categorie">
            <?php
                include("phplien/categorie.php");
            ?>
        </section>
    </section>
   
    <section class="parcours">
    <h1>Les parcours</h1>
        <div class="plac-parc">
            <div class="Enfants">
                <h1>Enfants</h1>
                <img src="image/circuitenfant.jpg" class="circenfant circuit">
            </div>
            <div class="Adultes">
                <h1>Adultes</h1>
                <img src="image/circuitadulte.jpg" class="circadulte circuit">
            </div>
        </div>
    </section>
    <?php include("footer.php");?>


    <script type="text/javascript">
        //Stick nav
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY > 0);
        })
   </script>
</body>
</html>