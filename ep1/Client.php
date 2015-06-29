<?php
require 'MobileSniffer.php';
class Client{
    private $mobSniff;
    public function __construct() {
        $this->mobSniff = new ep1\MobileSniffer();
        echo 'Device = ' . $this->mobSniff->findDevice() . '<br/>';
        echo 'Browser = ' . $this->mobSniff->findBrowser() . '<br/>';
    }
}

$trigger = new Client();
