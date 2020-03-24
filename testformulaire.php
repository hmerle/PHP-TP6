<?php
include('formulaire.php');

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Votre nom");
echo "<br>";
$form->ajouterZoneDeTexte("Votre code");
echo "<br>";
$form->ajouterBouton();
echo "<br>";
$form->getForm();
echo "<br>";

if(!empty($_POST['nom']) || !empty(['code'])){
    echo "Votre nom : ".$_POST['Votre nom']."<br>";
    echo "Votre code : ".$_POST['Votre code']."<br>";
}