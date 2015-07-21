<?php
require_once 'IPrototype.php';
class FemaleProto extends IPrototype{
    const gender = 'FEMALE';
    public $fecudity;
    
    public function __construct() {
        $this->eyeColor = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }
    
    public function __clone() {
        ;
    }
}