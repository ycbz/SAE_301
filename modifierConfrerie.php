<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $idConfrerie=$_GET['id'];

    if(isset($_POST['editNomConfrerie']))
    {
    $req1='UPDATE confrerie SET nomConfrerie="'.$_POST['editNomConfrerie'].'" WHERE idConfrerie='.$idConfrerie;
    $results=$bd->query($req1);
    }

    if(isset($_POST['editBio']))
    {
    $req2='UPDATE confrerie SET bio="'.$_POST['editBio'].'" WHERE idConfrerie='.$idConfrerie;
    $results=$bd->query($req2);
    }

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