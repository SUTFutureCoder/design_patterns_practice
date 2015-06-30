<?php
require 'OneTrickAbstract.php';

class OneTrick extends OneTrickAbstract{
    private $storeHere;
    public function trick($whatever){
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}

$doIt = new OneTrick();
$dataNow = $doIt->trick('This is perfect');
echo $dataNow;