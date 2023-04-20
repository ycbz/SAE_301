<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $idParticipant=$_GET['id'];

    if(isset($_POST['editNomParticipant']))
    {
    $req1='UPDATE participant SET nomParticipant="'.$_POST['editNomParticipant'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req1);
    }

    if(isset($_POST['editPrenom']))
    {
    $req2='UPDATE participant SET prenom="'.$_POST['editPrenom'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req2);
    }

    if(isset($_POST['editAge']))
    {
    $req3='UPDATE participant SET age="'.$_POST['editAge'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req3);
    }

    if(isset($_POST['editAdresse']))
    {
    $req4='UPDATE participant SET adresse="'.$_POST['editAdresse'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req4);
    }

    if(isset($_POST['editTelephone']))
    {
    $req5='UPDATE participant SET telephone="'.$_POST['editTelephone'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req5);
    }

    if(isset($_POST['editMail']))
    {
    $req6='UPDATE participant SET mail="'.$_POST['editMail'].'" WHERE idParticipant='.$idParticipant;
    $results=$bd->query($req6);
    }

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