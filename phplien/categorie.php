<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomCategorie, reglement, lienFederation FROM categorie');
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
            echo '<b class="cat">Catégorie : '.$this->nomCategorie.'</b><div class="espace"><p><br>'.$this->reglement.'</p><br><br><p>'.$this->lienFederation.'</p><br><br></div>';
        }
    }

    $categorie=array();
    for($i=0;$i<$categories;$i++)
    {
        $categorie[$i]=new Categorie($tab[$i][0], $tab[$i][1], $tab[$i][2]);
        $categorie[$i]->affichage();
    }
?>