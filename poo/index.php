<?php
// une methode est une fonction liée à une classe
// un attribut est un caractéristique, une variable lié à une classe

class Personnage
{

    // attributs
    // leur portée (public, private, protected)
    private $_force = 50; // par convention on l'ecrit $_force
    private $_couleurCasquette = "Rouge";
    private $_classe = "Plombier";
    private $_vie = 100;
    private $_degats = 0;
    private $_nom = "Unknown";

    //  Constructeur
    public function __construct($nom, $force, $couleurCasquette)
    {
        $this->_nom = $nom;
        $this->setForce($force);
        $this->setCouleurCasquette($couleurCasquette);
    }

    // methodes
    //------------------------------------------------
    public function getForce()
    {
        return $this->_force;
    }

    public function setForce($force)
    {
        $this->_force = $force;
    }
    //------------------------------------------------

    public function getCouleurCasquette()
    {
        return $this->_couleurCasquette;
    }
    public function setCouleurCasquette($couleurCasquette)
    {
        $this->_couleurCasquette = $couleurCasquette;
    }
    //------------------------------------------------


    public function getClasse()
    {
        return $this->_classe;
    }
    public function setClasse($Classe)
    {
        $this->_classe = $Classe;
    }
    //------------------------------------------------
    public function getInfos()
    {
        return "<p>" . $this->_nom . " a une force de " . $this->_force . " est de classe " . $this->_classe . " et a une clasquette de couleur " . $this->_couleurCasquette .

            ".</p>";
    }

    public function frapper(Personnage $personnage)
    {
        return $personnage->recevoirDegats($this->_force);
    }

    public function recevoirDegats($force)
    {
        $this->_vie -= $force;
        echo $this->_nom . " a perdu " . $force . " de points de vie il lui reste " . $this->_vie . " de vie";
    }
}

// on instantie 
$mario = new Personnage("Mario", 45, "Rouge");
$malick = new Personnage("Malick", 40, "Bleu");

echo $mario->getInfos();
echo $malick->getInfos();

$mario->frapper($malick);
$malick->frapper($mario);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>