<?php
    $idParcours=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $req='DELETE FROM parcours WHERE idParcours='.$idParcours;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Parcours2.php";
        }
        redirect()
        </script>';
    }
?>