<?php
    $idConfrerie=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $req='DELETE FROM confrerie WHERE idConfrerie='.$idConfrerie;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Confrerie2.php";
        }
        redirect()
        </script>';
    }
?>