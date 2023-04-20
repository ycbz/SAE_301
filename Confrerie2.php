<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    if (isset($_POST['nomConfrerie2']) && isset($_POST['bio2']))
    {
        $nomConfrerie=$_POST['nomConfrerie2'];
        $bio=$_POST['bio2'];

        $req=$bd->prepare('INSERT INTO confrerie(nomConfrerie, bio) VALUES (:nomConfrerie, :bio)');
        $req->bindParam(':nomConfrerie',$nomConfrerie);
        $req->bindParam(':bio',$bio);

        $req->execute();
    }
?>

<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace d'administration</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <h1>Espace d'administration</h1>
        <form method="POST" action="Admin2.php">
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select" name="select">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php">Caisses à Savon</option>
            <option value="Categorie2.php">Catégories</option>
            <option value="Confrerie2.php" selected>Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomConfrerie2">Nom : </label>
            <input type="text" id="nomConfrerie2" name="nomConfrerie2" required><br><br>
            <label for="bio2">Description : </label>
            <input type="text" id="bio2" name="bio2" required><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
    </body>
</html>

<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT idConfrerie, nomConfrerie, bio FROM confrerie');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $confreries=count($tab);

    class Confrerie
    {
        public $nomConfrerie="";
        public $bio="";

        public function __construct($nomConfrerie, $bio)
        {
            $this->nomConfrerie=$nomConfrerie;
            $this->bio=$bio;
        }

        public function affichage()
        {
            echo "<b>".$this->nomConfrerie."</b><br><br>".$this->bio."<br><br>";
        }
    }

    $confrerie=array();
    for($i=0;$i<$confreries;$i++)
    {
        $confrerie[$i]=new Confrerie($tab[$i][1], $tab[$i][2]);
        $confrerie[$i]->affichage();
        echo "<form method='POST' action='modifierConfrerie.php?id=".$tab[$i][0]."'><label for='editNomConfrerie'>Modifier le nom : </label><input type='text' id='editNomConfrerie' name='editNomConfrerie'><label for='editBio'> Modifier la description : </label><input type='text' id='editBio' name='editBio'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
        echo "<form method='POST' action='supprimerConfrerie.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
    }
?>