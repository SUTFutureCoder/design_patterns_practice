<?php
//相识关系
class Proxy extends ISubject{
    private $realSubject;
    protected function request(){
        //Proxy类包含RealSubject类的一个引用，也就与他建立了一个相识关系
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
    
    public function login($un, $pw){
        //计算口令等
        if ($un === 'Professional' && $pw === 'acp'){
            $this->request();
        } else {
            echo 'Cry and let slip the dogs of war!';
        }
    }
}