<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $idCategorie=$_GET['id'];

    if(isset($_POST['editNomCategorie']))
    {
    $req1='UPDATE categorie SET nomCategorie="'.$_POST['editNomCategorie'].'" WHERE idCategorie="'.$idCategorie.'"';
    $results=$bd->query($req1);
    }

    if(isset($_POST['editReglement']))
    {
    $req2='UPDATE categorie SET reglement="'.$_POST['editReglement'].'" WHERE idCategorie="'.$idCategorie.'"';
    $results=$bd->query($req2);
    }

    if(isset($_POST['editLienFederation']))
    {
    $req3='UPDATE categorie SET lienFederation="'.$_POST['editLienFederation'].'" WHERE idCategorie="'.$idCategorie.'"';
    $results=$bd->query($req3);
    }

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Categorie2.php";
        }
        redirect()
        </script>';
    }
?>