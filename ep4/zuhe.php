<?php
class SocialSecurityData{
    private $person_id;

    public function __construct($person_id) {
        $this->person_id = $person_id;
    }
    
    public function test(){
        echo 'Hello World!' . $this->person_id;
    }
}

class Person{
    private $p_social_security_data;
    
    public function getPerson($person_id){
        $this->p_social_security_data = new SocialSecurityData($person_id);
    }
    
    public function getData($person_id){
        $this->p_social_security_data->test();
    }
}


$person = new Person();
$person->getPerson('123456');
$person->getData('123456');
        

