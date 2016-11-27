<?php

namespace SEG\DAO;
use Doctrine\DBAL\Connection;
use SEG\Domain\Commune;



/**
 * Description of CommuneDAO
 *
 * @author usersio
 */
class CommuneDAO {
    //put your code here
    private $db;
    
    public function __construct(Connection $db) {
        $this->db = $db;
    }
    
    public function findAll(){
        $sql = 'select * from commune order by nom';
        $result = $this->db->fetchAll($sql);
        
        $communes = array();
        foreach ($result as $row) {
            $communes[$row['id']] = $this->buildCommune($row);
        }
        return $communes;
    }
    
    public function findName($id){
        $sql = 'select nom from commune where id = '.$id;
        $result = $this->db->fetchAll($sql);
        
        return $result[0]['nom'];
    }
    
    public function buildCommune(array $row){
        $commune = new Commune($row['id']);
        $commune->setNom($row['nom']);
        $commune->setId($row['id']);
        return $commune;
    }
}
