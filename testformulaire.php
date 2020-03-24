<?php
include('formulaire.php');

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Votre_nom");
$form->ajouterZoneDeTexte("Votre_code");
$form->ajouterBouton();
$form->getForm();

if(isset($_POST['Votre_nom']) && isset($_POST['Votre_code'])) {
    echo "Votre nom : " . $_POST['Votre_nom'] . "<br>";
    echo "Votre code : " . $_POST['Votre_code'] . "<br>";
}