<?php

namespace SEG\Domain;

/**
 * Description of Commune
 *
 * @author usersio
 */
class Commune {
    //put your code here
    private $id;
    private $nomCommune;
    
    public function getId(){
        return $this->id;
    }
    
    public function getNom(){
        return $this->nomCommune;
    }
    
    public function setNom($newNom){
        $this->nomCommune = $newNom;
    }
    
    public function setId($newId){
        $this->id = $newId;
    }
    
}
