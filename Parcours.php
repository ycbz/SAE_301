<?php
    $db=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomParcours, descriptif, distanceMetres FROM parcours');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $parcours_=count($tab);

    class Parcours
    {
        public $nomParcours="";
        public $descriptif="";
        public $distanceMetres="";

        public function __construct($nomParcours, $descriptif, $distanceMetres)
        {
            $this->nomParcours=$nomParcours;
            $this->descriptif=$descriptif;
            $this->distanceMetres=$distanceMetres;
        }

        public function affichage()
        {
            echo $this->nomParcours."<br>".$this->descriptif."<br>Distance : ".$this->distanceMetres."<br><br>";
        }
    }

    $parcours=array();
    for($i=0;$i<$parcours_;$i++)
    {
        $parcours[$i]=new Parcours($tab[$i][0], $tab[$i][1], $tab[$i][2]);
        $parcours[$i]->affichage();
    }
?>