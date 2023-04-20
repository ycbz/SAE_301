<?php
    $idParticipant=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $req='DELETE FROM participant WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Participant2.php";
        }
        redirect()
        </script>';
    }
?>