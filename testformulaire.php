<?php
include('formulaire.php');

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Votre_nom");
echo "<br>";
$form->ajouterZoneDeTexte("Votre_code");
echo "<br>";
$form->ajouterBouton();
echo "<br>";
$form->getForm();
echo "<br>";

if(isset($_POST['Votre_nom']) && isset($_POST['Votre_code'])) {
    echo "Votre nom : " . $_POST['Votre_nom'] . "<br>";
    echo "Votre code : " . $_POST['Votre_code'] . "<br>";
}