<?php
include formulaire::class;

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Votre nom", "nom");
$form->ajouterZoneDeTexte("Votre code", 'code');
$form->ajouterBouton();
$form->getForm();

if(!empty($_POST['nom']) || empty(['code'])){
    echo "Votre nom : ".$_POST['nom']."<br>";
    echo "Votre code : ".$_POST['code']."<br>";
}