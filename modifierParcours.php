<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $idParcours=$_GET['id'];

    if(isset($_POST['editNomParcours']))
    {
        $req1='UPDATE parcours SET nomParcours="'.$_POST['editNomParcours'].'" WHERE idParcours='.$idParcours;
        $results=$bd->query($req1);
    }

    if(isset($_POST['editDescriptif']))
    {
        $req2='UPDATE parcours SET descriptif="'.$_POST['editDescriptif'].'" WHERE idParcours='.$idParcours;
        $results=$bd->query($req2);
    }

    if(isset($_POST['editDistanceMetres']))
    {
        $req3='UPDATE parcours SET distanceMetres="'.$_POST['editDistanceMetres'].'" WHERE idParcours='.$idParcours;
        $results=$bd->query($req3);
    }

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