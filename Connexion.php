<?php
    if(isset($_POST['idAdmin']) && isset($_POST['mdp']))
    {
        if($_POST['idAdmin']=="lcdr_admin" && $_POST['mdp']=="lcdr_adty")
        {
            header('Location: admin.php');
            exit();
        }
        else
        {
            $msg="Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    else
    {
        $msg="";
    }
?>

<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion à l'espace d'administration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST" action="">
            <p>Connexion à l'espace d'administration</p>
            <input type="text" id="idAdmin" name="idAdmin" placeholder="Identifiant" required><br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required><br><br>
            <input type="submit" id="submit" value="Connexion">
            <p class="msgErreur"><?php echo $msg?></p>
        </form>
    </body>
</html>