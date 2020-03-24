<?php

class formulaire{
    public function __construct($methode, $fichierCible){
        echo "<form action='".$fichierCible."' method='".$methode."'>";
    }
    public function ajouterZoneDeTexte($text){
        echo "$text"."<input type='text' name='".$text."'/><br>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'/><br>";
    }
    function getForm(){
        echo "</form>";
    }
}


//class Formulaire{
//    function __construct($nom, $methode){
//        echo "<form action='".$nom."' method='".$methode."'>";
//    }
//    public function addTextZone($text = ""){
//        echo "$text"."<input name='".$text."' type='text'/><br>";
//    }
//    public function addButton($text = ""){
//        echo"<input type='submit' value='".$text."'/>";
//    }
//    public function getForm(){
//        echo "</form>";
//    }
//}
