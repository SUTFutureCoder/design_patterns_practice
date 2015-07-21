<?php
require_once 'FurryPets.php';
class Dogs extends FurryPets{
    public function __construct() {
        echo 'Dogs ' . $this->fourlegs() . '<br/>';
        echo $this->makesSound('Woof, wookf') . '<br/>';
        echo $this->guardsHouse() . '<br/>';
    }
    
    private function guardsHouse(){
        return 'Grrrrr' . '<br/>';
    }
}