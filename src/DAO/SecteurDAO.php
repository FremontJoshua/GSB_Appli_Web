<?php

namespace SEG\DAO;
use Doctrine\DBAL\Connection;
use SEG\Domain\Secteur;

/**
 * Description of SecteurDAO
 *
 * @author usersio
 */
class SecteurDAO {
    //put your code here
    private $db;
    
    public function __construct(Connection $db) {
        $this->db = $db;
    }
    
    public function findName($id){
        $sql = 'select nom from secteur where id = '.$id;
        $result = $this->db->fetchAll($sql);
        
        return $result[0]['nom'];
    }
    
    public function findEspaceVert($id){
        $sql = 'select espaceVert from secteur where id = '.$id;
        $result = $this->db->fetchAll($sql);
        
        return $result[0]['espaceVert'];
    }
    
    public function findSectorsByCommune($id){
        $sql = 'select * from secteur where commune_id = '.$id;
        $result = $this->db->fetchAll($sql);
        
        return $result;
    }
}
