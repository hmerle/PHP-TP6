<?php
include formulaire::class;

$form = new formulaire("post", "testformulaire.php");
$form->ajouterZoneDeTexte();
$form->ajouterBouton();