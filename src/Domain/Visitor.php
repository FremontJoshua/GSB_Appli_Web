<?php

namespace GSB\Domain;

/**
 * Description of Commune
 *
 * @author usersio
 */
class Visitor {
    //put your code here
    private $id;
    private $lastName;
    private $firstName;
    private $address;
    private $postCode;
    private $city;
    private $recruitementDate;
    private $departementId;
    
    public function getId(){
        return $this->id;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function getPostCode(){
        return $this->postCode;
    }
    
    public function getCity(){
        return $this->city;
    }
    
    public function getRecruitementDate(){
        return $this->recruitementDate;
    }
    
    public function getDepartementId(){
        return $this->depratementId;
    }
    
    public function setLastName($newName){
        $this->lastName = $newName;
    }
    
    public function setFirstName($newName){
        $this->firstName = $newName;
    }
    
    public function setAddress($newAddress){
        $this->address = $newAddress;
    }
    
    public function setPostCode($newCode){
        $this->postCode = $newCode;
    }
    
    public function setCity($newCity){
        $this->city = $newCity;
    }
    
    public function setRecruitementDate($newDate){
        $this->recruitementDate = $newDate;
    }
    
    public function setDepartementId($newId){
        $this->departementId = $newId;
    }
    
    public function setId($newId){
        $this->id = $newId;
    }
    
}
