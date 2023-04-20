<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    if (isset($_POST['nomParticipant2']) && isset($_POST['prenom2']) && isset($_POST['age2']) && isset($_POST['adresse2']) && isset($_POST['telephone2']) && isset($_POST['mail2']))
    {
        $nomParticipant=$_POST['nomParticipant2'];
        $prenom=$_POST['prenom2'];
        $age=$_POST['age2'];
        $adresse=$_POST['adresse2'];
        $telephone=$_POST['telephone2'];
        $mail=$_POST['mail2'];

        $req=$bd->prepare('INSERT INTO participant(nomParticipant, prenom, age, adresse, telephone, mail) VALUES (:nomParticipant, :prenom, :age, :adresse, :telephone, :mail)');
        $req->bindParam(':nomParticipant',$nomParticipant);
        $req->bindParam(':prenom',$prenom);
        $req->bindParam(':age',$age);
        $req->bindParam(':adresse',$adresse);
        $req->bindParam(':telephone',$telephone);
        $req->bindParam(':mail',$mail);

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
            <option value="Confrerie2.php">Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php" selected>Participants</option>
        </select>
        <button id="button">Consulter</button>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomParticipant2">Nom : </label>
            <input type="text" id="nomParticipant2" name="nomParticipant2" required><br><br>
            <label for="prenom2">Prénom : </label>
            <input type="text" id="prenom2" name="prenom2" required><br><br>
            <label for="age2">Âge : </label>
            <input type="number" id="age2" name="age2" min="14" max="99" required><br><br>
            <label for="adresse2">Adresse : </label>
            <input type="text" id="adresse2" name="adresse2" required><br><br>
            <label for="telephone2">Téléphone : </label>
            <input type="text" id="telephone2" name="telephone2" required><br><br>
            <label for="mail2">Mail : </label>
            <input type="text" id="mail2" name="mail2" required><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
    </body>
</html>

<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT idParticipant, nomParticipant, prenom, age, adresse, telephone, mail FROM participant');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $participants=count($tab);

    class Participant
    {
        public $nomParticipant="";
        public $prenom="";
        public $age="";
        private $adresse="";
        private $telephone="";
        private $mail="";

        public function __construct($nomParticipant, $prenom, $age, $adresse, $telephone, $mail)
        {
            $this->nomParticipant=$nomParticipant;
            $this->prenom=$prenom;
            $this->age=$age;
            $this->adresse=$adresse;
            $this->telephone=$telephone;
            $this->mail=$mail;
        }

        public function affichage()
        {
            echo "<b>".$this->nomParticipant." ".$this->prenom."</b><br>".$this->age." ans<br>".$this->adresse."<br>".$this->telephone."<br>".$this->mail."<br><br>";
        }
    }

    $participant=array();
    for($i=0;$i<$participants;$i++)
    {
        $participant[$i]=new Participant($tab[$i][1], $tab[$i][2], $tab[$i][3], $tab[$i][4], $tab[$i][5], $tab[$i][6]);
        $participant[$i]->affichage();
        echo "<form method='POST' action='modifierParticipant.php?id=".$tab[$i][0]."'><label for='editNomParticipant'>Modifier le nom : </label><input type='text' id='editNomParticipant' name='editNomParticipant'><label for='editPrenom'> Modifier le prénom : </label><input type='text' id='editPrenom' name='editPrenom'><label for='editAge'> Modifier l'âge : </label><input type='number' id='editAge' name='editAge' min='14' max='99'><label type='editAdresse'> Modifier l'adresse : </label><input type='text' id='editAdresse' name='editAdresse'><label type='editTelephone'> Modifier le numéro de téléphone : </label><input type='tel' id='editTelephone' name='editTelephone'><label type='editMail'> Modifier l'adresse mail : </label><input type='email' id='editMail' name='editMail'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
        echo "<form method='POST' action='supprimerParticipant.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
    }
?>