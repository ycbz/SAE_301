<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="./node_modules/swiper/css/swiper.min.css">
    <link rel="shortcut icon" href="image/favicon.png">


</head>
<body>
    <!-------------Header----------------->
    <?php include("header.php");?>


    <!-- Carrousel-->
    <section class="banniere">
        <h1 class="tbanniere">La Course du Roi</h1>
        <h2 class="tbanniere2">Un évènement inédit de Caisse à Savon au Puy-en-Velay</h2>
        <div class="swiper-container">
        <div class="swiper-wrapper">
        <!--slide -->
        <div class="swiper-slide" style="background: url(./image/lepuy-1.jpg) center/cover;"></div>
        <div class="swiper-slide" style="background: url(./image/lepuy-2.jpg) center/cover;"></div>
        <div class="swiper-slide" style="background: url(./image/lepuy-3.jpg) center/cover;"></div>
        <div class="swiper-slide" style="background: url(./image/lepuy-4.jpg) center/cover;"></div>
        <div class="swiper-slide" style="background: url(./image/lepuy-5.jpg) center/cover;"></div>
        </div>
            <div class="swiper-pagination"></div>
        </div>
   


        <script src="./assets/jquery.min.js" type="text/javascript"></script>
        <script src="node_modules/swiper/js/swiper.min.js"></script>
        <!-- JS pour le carrousel -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                loop:true,
                autoplay: {
                    delay: 4000
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                    },
                },
            });
        </script>
    </section>



<!-- -----------------Debut EvenementInedit-------------- -->
    <h1>Un Evenement Inedit</h1>
        <!-- Vidéo-->
        <div class="contenaireV">
            <div class="videoo">
            <video controls>
                <source src="image/Caisse.mp4" type=video/mp4>
            </video>
            </div>
        </div>
        <!--Script pour redimmensionner la vidéo-->
        <script>
            $(document).ready(redimensionnerVideos);
            function redimensionnerVideos() {
                $('iframe').each(function() {
                    var elt = $(this);
                    var ratio = elt.width() / elt.height();
                    var limite = parseInt(elt.attr('width'));
                    var largeur = Math.min(elt.parent().width(), limite);
                    video.width(largeur).height(largeur / ratio);
		        });
            }
            $(window).resize(redimensionnerVideos);
        </script>
    <section id="contenu" class="para-image">
            <div class="paragraphe">
                <p>Lors de la troisième semaine de Juin, la ville du Puy-en-Velay replongera, le temps d'une fin de semaine, dans le XVI<sup>ème</sup> siècles si caractéristique des fêtes renaissance du Roi de l'Oiseau.</p>
            </div>
            <div class="container">
                <img class="image-first" src="image/caissebois2.png">
                <div class="paragraphe">
                    <p>L'annuel coucours d'adresse du tir à l'arc laissera, en ce début d'été, la part belle à un événement jamais vu dans le monde entier : une course de Caisses à Savon couleurs Renaissance !</p>
                </div>
            </div>
    </section>
<!-- -----------------Fin EvenementInedit-------------- -->




<!-- -----------------Debut Confrerie-------------- -->
    <h1>Defendre Ses Couleurs</h1>
    <section class="confdegrade">
            <div class="paragraphe confrerie-para">
                <p>Les habituelles confréries présentes dans le Velay chaque année reviendront défendre leurs couleurs dans une formule de tournoi médiéval revisitée. Elles seront représentées par leurs champions préalablement sélectionnés parmi la liste des inscrits; la participation est Ouverte à Tous !</p>
            </div>
            <div class="button-container">
                <button class="button-conf"><a href="confrerie.php">En savoir plus</a></button>
            </div>  
    </section>
<!-- -----------------Fin Confrerie-------------- -->




<!-- -----------------Debut Programme-------------- -->
    <h1>Honneur aux Participants, Gloire aux Vainqueurs</h1>
    <section id="contenu" class="para-image3">
        <div class="paragraphe">
            <p>Les festivités débuteront vendredi soir, avec un défilé des participants, leurs caisses à savon et les couleurs qu'ils représentent.
                Il est évidemment possible de coucourir sous bannière personnelle ou neute, tant que le thème est respecté.
                Ils passeront devant la tribune installée pour l'occasion sur le boulevard Saint-Louis, où seront installés les jurys des différentes épreuves.
            </p>
        </div>
        <div class="button-container">
            <button  class="button-conf"><a href="programme.php">En savoir plus</a></button>
        </div>  
    </section>
<!-- -----------------Fin Programme-------------- -->



<!-- ------Debut Epreuves ------------>

    <h1>Epreuves</h1>
    <section class="epreuve-container">
        <div class="paragraphe">
            <p>Les épreuves sont au nombre de trois : deux pour les adultes (18ans et plus) et une pour les enfants (14 - 17 ans).
            </p>
        </div>
        <div class="button-container">
            <button class="button-conf"><a href="epreuve.php">En savoir plus</a></button>
        </div>  
    </section>
<!-- ------Fin Epreuves ------------>

<!-- -----------------Debut Footer-------------- -->

    <?php include("footer.php");?>
<!-- -----------------Debut Programme-------------- -->
    

  
    
    <script type="text/javascript">
        //Stick nav
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY > 0);
        })
   </script>
</body>
</html>