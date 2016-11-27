<?php

namespace GSB\DAO;
use Doctrine\DBAL\Connection;
use GSB\Domain\Visitor;



/**
 * Description of CommuneDAO
 *
 * @author usersio
 */
class VisitorDAO {
    //put your code here
    private $db;
    
    public function __construct(Connection $db) {
        $this->db = $db;
    }
    
    public function findAll(){
        $sql = 'select * from visitor order by last_name';
        $result = $this->db->fetchAll($sql);
        
        $visitors = array();
        foreach ($result as $row) {
            $visitors[$row['id']] = $this->buildCommune($row);
        }
        return $visitors;
    }
    
    public function buildCommune(array $row){
        $visitor = new Visitor($row['id']);
        $visitor->setLastName($row['last_name']);
        $visitor->setFirstName($row['first_name']);
        $visitor->setId($row['id']);
        return $visitor;
    }
}
