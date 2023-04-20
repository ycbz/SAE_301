<?php
    $idCategorie=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $req='DELETE FROM categorie WHERE idCategorie='.$idCategorie;
    $results=$bd->query($req);

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