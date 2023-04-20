<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    if (isset($_POST['nomCategorie2']) && isset($_POST['reglement2']) && isset($_POST['lienFederation2']))
    {
        $nomCategorie=$_POST['nomCategorie2'];
        $reglement=$_POST['reglement2'];
        $lienFederation=$_POST['lienFederation2'];

        $req=$bd->prepare('INSERT INTO categorie(nomCategorie, reglement, lienFederation) VALUES (:nomCategorie, :reglement, :lienFederation)');
        $req->bindParam(':nomCategorie',$nomCategorie);
        $req->bindParam(':reglement',$reglement);
        $req->bindParam(':lienFederation',$lienFederation);

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
                <option value="Categorie2.php" selected>Catégories</option>
                <option value="Confrerie2.php">Confréries</option>
                <option value="Parcours2.php">Parcours</option>
                <option value="Participant2.php">Participants</option>
            </select>
            <button id="button">Consulter</button>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomCategorie2">Catégorie : </label>
            <input type="text" id="nomCategorie2" name="nomCategorie2" required><br><br>
            <label for="reglement2">Règlement : </label>
            <input type="text" id="reglement2" name="reglement2" required><br><br>
            <label for="lienFederation2">Lien : </label>
            <input type="text" id="lienFederation2" name="lienFederation2"><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
    </body>
</html>

<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT idCategorie, nomCategorie, reglement, lienFederation FROM categorie');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $categories=count($tab);

    class Categorie
    {
        public $nomCategorie="";
        public $reglement="";
        public $lienFederation="";

        public function __construct($nomCategorie, $reglement, $lienFederation)
        {
            $this->nomCategorie=$nomCategorie;
            $this->reglement=$reglement;
            $this->lienFederation=$lienFederation;
        }

        public function affichage()
        {
            echo "Catégorie : ".$this->nomCategorie."<br><br>".$this->reglement."<br><br>".$this->lienFederation."<br><br>";
        }
    }

    $categorie=array();
    for($i=0;$i<$categories;$i++)
    {
        $categorie[$i]=new Categorie($tab[$i][1], $tab[$i][2], $tab[$i][3]);
        $categorie[$i]->affichage();
        echo "<form method='POST' action='modifierCategorie.php?id=".$tab[$i][0]."'><label for='editNomCategorie'>Modifier le nom : </label><input type='text' id='editNomCategorie' name='editNomCategorie'> <label for='editReglement'>Modifier le règlement : </label><input type='text' id='editReglement' name='editReglement'> <label for='editLienFederation'>Modifier le lien : </label><input type='text' id='editLienFederation' name='editLienFederation'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
        echo "<form method='POST' action='supprimerCategorie.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
    }
?>