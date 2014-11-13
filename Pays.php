<?php 
class Pays
{
  //déclaration d'un attribut
   private $_nom;
   private $_superficie;
   private $_population;   
  //déclaration du constructeur 
    /*public function Pays($nom,$superficie,$population)//appel de la fonction __construct de la class Pays
   {
		$this->_nom=$nom;
		$this->_superficie=$superficie;
		$this->_population=$population;
   }*/
    public function __construct($nom,$superficie,$population)//appel de la fonction __construct de la class Pays
   {
		$this->_nom=$nom;
		$this->_superficie=$superficie;
		$this->_population=$population;
   }
   //declaration de l'accesseur
    public function getNom()
   {
       return ($this->_nom);
   }
    public function getSuperficie()
   {
       return ($this->_superficie);
   }
    public function getPopulation()
   {
       return ($this->_population);
   }
   //declaration des modificateurs
    public function setNom($newnom)
   {
       $this->_nom=$newnom;
   }
    public function setSuperficie($newsuperficie)
   {
       $this->_superficie=$newsuperficie;
   }
    public function setPopulation($newpopulation)
   {
       $this->_population=$newpopulation;
   }   
   //déclaration d'une méthode
   /*public function affichagePays()
   {
       $messageAffiche='Nom :'.$this->getNom().'superficie :'.$this->getSuperficie().'population :'.$this->getPopulation().'millions';
       echo($messageAffiche);
   }*/
   //affichage avec la methode __toString
    
   public function __toString()
   {
		return $this->__nom;
		return $this->__population;
		return $this->__superficie;
   }
}
?>