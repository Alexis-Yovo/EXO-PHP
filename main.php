<?php
// Inclusion du fichier maison.php
require_once 'maison.php';

// Création de quelques maisons
$maison1 = new Maison(2021, 2, 80);
$maison2 = new Maison(2022, 3, 100);
$maison3 = new Maison(2023, 4, 120);

// Affichage des détails des maisons
$maison1->afficherDetails();
$maison2->afficherDetails();
$maison3->afficherDetails();
?>
