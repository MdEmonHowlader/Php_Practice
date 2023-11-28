<?php
class Constructor{
    public $name;
    public $dep;
    function __construct($name, $dep)
    {
        $this->name=$name;
        $this->dep=$dep;
    }
    function get_name(){
       return $this->name;
    }
    
    function get_dep(){
        return $this->dep;
    }
// function info(){
//     return "Name: ".$this->name. "is " .$this->dep;

// }

}

$info= new Constructor('Emon ', 'CSE');
echo $info->get_name();
echo $info->get_dep();

?>