<?php
include 'formulaire.php';

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Nom");
$form->ajouterZoneDeTexte("Code");
$form->ajouterBouton();
$form->getForm();

if(isset($_POST["Nom"]) && isset($_POST["Code"])) {
    echo $_POST['Nom']."<br>";
    echo $_POST['Code'];
}