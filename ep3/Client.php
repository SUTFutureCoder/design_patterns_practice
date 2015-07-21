<?php
require_once 'NorthRegion.php';
require_once 'WestRegion.php';

class Client{
    public function __construct() {
        $north = new NorthRegion;
        $west = new WestRegion();
        $this->showInterface($north);
        $this->showInterface($west);
    }
    
    private function showInterface(IAbstract $region){
        echo $region->displayShow() . '<br/>';
    }
}
$worker = new Client();