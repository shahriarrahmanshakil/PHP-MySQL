<?php 
interface User{ 
    public function getName();
    public function info();
    public function desplay();

}

class wdpf implements User{ 
    public function getName(){ 
        echo "One";
    }
    public function info(){ 
        echo "second";
    }
    public function desplay(){ 
        echo "third";
    }
}

$add = new wdpf;
$add->getName();
$add->info();
$add->desplay();
?>