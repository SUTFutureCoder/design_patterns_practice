<?php
require_once 'Dogs.php';
require_once 'Cats.php';

class Client{
    public function __construct() {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}
$worker = new Client();