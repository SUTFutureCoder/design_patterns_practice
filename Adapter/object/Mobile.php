<?php
require_once 'IMobileFormat.php';
class Mobile implements IMobileFormat{
    private $head = '<!doctype html><html><head>';
    private $headClose = '<meta charset="UTF-8"><title>Mobile</title></head><body>';
    private $cap = '</body></html>';
    private $sampleText;
    public function formatCSS() {
        echo $this->head;
        echo '<link rel="stylesheet" href="mobile.css">';
        echo $this->headClose;
        echo '<h1>Hello, EveryOne!</h1>';
        
    }
    
    public function formatGraphics() {
        echo '<img src="pix/fallRiver960.png" width=device-width height=device-height alt="river">';
    }
    
    public function verticalLayout() {
        $textInfo = 'mobile';
        $this->sampleText = $textInfo;
        echo '<p/><div>' . $this->sampleText . '</div>';
    }
    
    public function closeHTML(){
        echo $this->cap;
    }
    
}