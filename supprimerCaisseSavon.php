<?php
    $idCaisseSavon=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $req='DELETE FROM caissesavon WHERE idCaisseSavon='.$idCaisseSavon;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="CaisseSavon2.php";
        }
        redirect()
        </script>';
    }
?>