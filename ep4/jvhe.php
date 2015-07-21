<?php
class Pupil{
    public $name;
    
    public static function newPupil(){
        return new self();
    }
    
    public function test(){
        echo 'test jvhe';
    }
}

class SchoolClass{
    private $_students = array();
    public function addPupil(Pupil $student){
        $this->_students[] = $student;
    }
    
    public function usePupil(){
        foreach ($this->_students as $pupil){
            $pupil->test();
        }
    }
}

$pupil = Pupil::newPupil();
$schoolClass = new SchoolClass();

$schoolClass->addPupil($pupil);
$schoolClass->usePupil();
        
