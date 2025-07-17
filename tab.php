<?php
// Tableaux associatifs représentant les personnes
$personne1 = [
    "nom" => "Ganesh",
    "age" => 52,
    "sexe" => "Homme"
];

$personne2 = [
    "nom" => "Sarah",
    "age" => 28,
    "sexe" => "Femme"
];

$personne3 = [
    "nom" => "Gildas",
    "age" => 38,
    "sexe" => "Homme"
];

// Tableau contenant toutes les personnes
$toutesLesPersonnes = [$personne1, $personne2, $personne3];

// Fonction pour afficher une personne
function afficherPersonne($personne) {
    echo "Nom : " . $personne["nom"] . "<br>";
    echo "Âge : " . $personne["age"] . "<br>";
    echo "Sexe : " . $personne["sexe"] . "<br><hr>";
}

// Appel de la fonction pour afficher toutes les personnes
foreach ($toutesLesPersonnes as $personne) {
    afficherPersonne($personne);
}
?>
