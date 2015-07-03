<?php
interface ISpeed{
    function fast();
    function cruise();
    function slow();
}

class Jet implements ISpeed{
    public function slow() {
        return 120;
    }
    
    public function cruise() {
        return 1200;
    }
    
    public function fast() {
        return 1500;
    }
}

class Cat implements ISpeed{
    public function slow() {
        $carSlow = 15;
        return $carSlow;
    }
    
    public function cruise() {
        $carCruise = 65;
        return $carCruise;
    }
    
    public function fast() {
        $carZoom = 110;
        return $carZoom;
    }
}

$f22 = new Jet();
$jetSlow = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast = $f22->fast();
echo '<br/>My jet can take off at ' . $jetSlow . ' mph and cruises at ' . $jetCruise . ' mph.';
echo 'However, I can crank it up to ' . $jetFast . ' mph if I\'m in a hurry';

