<?php

require ('/database/connexion.php');

class Company{

    public $id;
    public $name;
    public $logo;
    public $desc;
    public $visible;
    public $sector;
    public $pilotTrust;
    public $internships;
    public $locations;
    public $grades;

    public function get_id(){return $this->id;}
    public function get_name(){return $this->name;}
    public function get_desc(){return $this->desc;}
    public function get_visible(){return $this->visible;}
    public function get_sector(){return $this->sector;}
    public function get_pilotTrust(){return $this->pilotTrust;}
    public function get_internships(){return $this->internships;}
    public function get_locations(){return $this->locations;}
    public function get_grades(){return $this->grades;}

    public function set_name($string){}
    public function set_desc($string){}
    public function set_visible($bool){}
    public function set_sector($string){}
    public function set_pilotTrust($float){}

    public function addInternships($id){}
    public function removeInternships($id){}
    public function addLocations(){}
    public function removeLocations(){}
    public function addGrades(){}
    public function removeGrades(){}
}

?>