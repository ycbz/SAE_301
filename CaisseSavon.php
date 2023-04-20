<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomCaisseSavon FROM caissesavon');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $caissesSavon=count($tab);

    class CaisseSavon
    {
        public $nomCaisseSavon="";

        public function __construct($nomCaisseSavon)
        {
            $this->nomCaisseSavon=$nomCaisseSavon;
        }

        public function affichage()
        {
            echo $this->nomCaisseSavon."<br><br>";
        }
    }

    // $caisseSavon=array();
    // for($i=0;$i<$caissesSavon;$i++)
    // {
    //     $caisseSavon[$i]=new CaisseSavon($tab[$i][0], $tab[$i][1], $tab[$i][2]);
    //     $caisseSavon[$i]->affichage();
    // }
?>