<?php
    $db=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomConfrerie, bio FROM confrerie');
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
        $confrerie[$i]=new Confrerie($tab[$i][0], $tab[$i][1]);
        $confrerie[$i]->affichage();
    }
?>