<DOCTYPE html>
    <html lang="fr">
    <body>
<?php

class formulaire{
    public function ajouterZoneDeTexte($text){
        echo $text."<input type='text' name=$text/>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'/><br>";
    }
    function getForm(){
        echo "</form>";
    }
    public function __construct($methode, $fichierCible){
        echo "<form action='".$fichierCible."' method='".$methode."'><br>";
    }
}

?>
    </body>
    </html>
</DOCTYPE>