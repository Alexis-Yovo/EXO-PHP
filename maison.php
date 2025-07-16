<?php
class Maison {
    // Attributs privés
    private $id;
    private $anneeCreation;
    private $nbChambres;
    private $surface;

    // Attribut statique pour stocker le dernier ID
    private static $dernierId = 0;

    // Constructeur
    public function __construct($anneeCreation, $nbChambres, $surface) {
        self::$dernierId++; // Incrémente l'ID statique
        $this->id = self::$dernierId;
        $this->anneeCreation = $anneeCreation;
        $this->nbChambres = $nbChambres;
        $this->surface = $surface;
    }

    // Accesseurs (getters)
    public function getId() {
        return $this->id;
    }

    public function getAnneeCreation() {
        return $this->anneeCreation;
    }

    public function getNbChambres() {
        return $this->nbChambres;
    }

    public function getSurface() {
        return $this->surface;
    }

    // Méthode pour afficher les détails de la maison
    public function afficherDetails() {
        echo "ID : " . $this->id . "<br>";
        echo "Année de création : " . $this->anneeCreation . "<br>";
        echo "Nombre de chambres : " . $this->nbChambres . "<br>";
        echo "Surface : " . $this->surface . " m²<br><hr>";
    }
}
?>
