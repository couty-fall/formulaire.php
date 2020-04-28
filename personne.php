<?php
 class Personne{
    private $matricule;
    private $nom;
    private $prenom;
    private $sexe;
    private $adresse;
    private $service;
    private $fonction;
    public function __construct($m, $n, $p, $sx, $a, $s, $fn)
        {
        	$this->matricule = $n;
        	$this->nom = $n;
        	$this->prenom = $n;
        	$this->sexe = $sx;
        	$this->adresse = $a;
        	$this->service = $s;
        	$this->fonction = $fn;  
        }
    public function getInfo()
            {
                $coord = "$this->matricule $this->nom  $this->prenom $this->sexe $this->adresse $this->service $this->fonction";
                return $coord;
            }
    public function setAdresse($adresse)
            {
                $this->adresse = $adresse;
            }
 }
?>