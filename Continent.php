<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Continent
 *
 * @author sergine
 */
class Continent extends Pays
    {
    var $continent;
    public function Continent($nom,$superficie,$population,$continent)
    {
        parent::__construct($nom,$superficie,$population); //appel de la méthode parente
        $this->continent = $continent;
    }
    public  function getContinent()
    {
        return $this->continent;
    }
   /* function Affichage()
    {
		$message=parent::Affichage().'Continent :'.$this->continent;
		return($message);
	}	*/
    public function __toString()//méthode magique de PHP
    {        
        return $this->continent;
    }
 }


