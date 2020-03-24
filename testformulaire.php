<?php
include('formulaire.php');

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Nom");
$form->ajouterZoneDeTexte("Code");
$form->ajouterBouton();
$form->getForm();

if(isset($_POST['Nom']) && isset($_POST['Code'])) {
    echo "Votre nom : " . $_POST['Nom'] . "<br>";
    echo "Votre code : " . $_POST['Code'] . "<br>";
}