<DOCTYPE html>
    <html lang="fr">
    <body>
<?php

class formulaire{
    public function __construct($methode, $fichierCible){
        echo "<form method= $methode action='$fichierCible'>";
    }
    function ajouterZoneDeTexte($text, $name){
        echo $text."<input type='text' name=$name/>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'/>";
    }
    function getForm(){
        echo "</form>";
    }
}

?>
    </body>
    </html>
</DOCTYPE>