<?php
abstract class IAbstract{
    protected $valueNow;
    
    abstract protected function giveCost();
    abstract protected function giveCity();
    
    //注意这不是一个抽象方法
    public function displayShow(){
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether;
    }
}