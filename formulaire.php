<DOCTYPE html>
    <html lang="fr">
    <body>
<?php

class formulaire{
    function ajouterZoneDeTexte($text){
        echo $text."<input type='text' name=$text/>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'/>";
    }
    function getForm(){
        echo "</form>";
    }
    public function __construct($methode, $fichierCible){
        echo "<form method= $methode action='$fichierCible'>";
    }
}

?>
    </body>
    </html>
</DOCTYPE>