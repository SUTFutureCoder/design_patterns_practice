<?php
abstract class CloneMe{
    public $name;
    public $picture;
    abstract function __clone();
}

class Person extends CloneMe{
    public function __construct() {
        $this->picture = 'cloneMan.png';
        $this->name = 'Original';;
    }
    
    public function __clone() {
    }
    
    public function display(){
        echo '<h1>' . $this->picture . '</h1>';
        echo '<h2>' . $this->name . '</h2>';
    }
}

$worker = new Person();

$worker->display();

$slacker = clone $worker;
$slacker->name = 'Cloned';
$slacker->display();