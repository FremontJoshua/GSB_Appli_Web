<?php

namespace SEG\Domain;

/**
 * Description of Secteur
 *
 * @author usersio
 */
class Secteur {
    //put your code here
    private $numSecteur;
    private $nomSecteur;
    private $espaceVert;
    
    public function getNumSecteur() {
        return $this->numSecteur;
    }
    
    public function getNomSecteur() {
        return $this->nomSecteur;
    }
    
    public function getEspacevert() {
        return $this->espaceVert;
    }
}
