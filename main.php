<?php
echo "<h1>TP6 : POO</h1>";
?>
    <DOCTYPE html>
        <html lang="fr">
        <body>
        <a href='main.php'>Cliquez ici pour actualiser</a>
        </body>
        </html>
    </DOCTYPE>
<?php
echo "<hr>";

//-----------------------------------------------------------------------------------
//----------------------------------------Ex1----------------------------------------
//-----------------------------------------------------------------------------------

echo "<h2>Ex 1</h2>";

class equipe{
    private $nom;
    private $nb_titres;
    static $nb_equipes = 0;
    const TEXT = "Nombre d'équipe : ";

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}
    public function getNbTitres(){return $this->nb_titres;}
    public function setNbTitres($nb_titres){$this->nb_titres = $nb_titres;}

    function display(){
        echo "L'équipe ".$this->nom." a ".$this->nb_titres." titres.<br>";
    }
    static function nombre_equipes(){
        echo self::TEXT.self::$nb_equipes."<br>";
    }

    public function __construct($name, $nb_titres){
        $this->nom = $name;
        $this->nb_titres = $nb_titres;
        self::$nb_equipes++;
    }
    public function __destruct(){
        echo "<br>Destructor";
        self::$nb_equipes--;
    }
}

$equipe1 = new equipe("Paris", 0);
$equipe1->display();
$equipe2 = new equipe("Nantes", 5);
$equipe2->display();
$equipe3 = new equipe("Lille", 8);
$equipe3->display();
$equipe4 = new equipe("Toulouse", 15);
$equipe4->display();
equipe::nombre_equipes();
?>