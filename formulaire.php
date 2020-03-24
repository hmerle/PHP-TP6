<?php


class formulaire{
    public function __construct($methode, $fichierCible){
        echo "<form method='".$methode."' action='".$fichierCible."'>";
    }
    function ajouterZoneDeTexte(){
        echo"<input type='text'/>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'>";
    }
}