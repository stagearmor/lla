<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insulaires
 *
 * @author sergine
 */
class Insulaires extends Pays
    {
    var $mer;
    public function Insulaires($nom,$superficie,$population,$mer)
    {
        parent::__construct($nom,$superficie,$population);//appel de la méthode parente
        $this->mer = $mer;
    }
    public function getMer()
    {
        return $this->mer;
    }
   /* function Affichage()
    {
        $message=parent::Affichage().'Mer/Océan :'.$this->mer;
        return($message);
    }*/
    public function __toString()//méthode magique de PHP
    {        
        return $this->mer;
    }  
}

 

