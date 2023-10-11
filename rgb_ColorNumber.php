<?php
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode)
    {
        $this->color=ltrim($colorCode, "#");
        $this->parseColor();
    }
    public function getColor(){
        return $this->color;
    }

    public function setColor($colorCode){
        $this->color=ltrim($colorCode, "#");
        $this->parseColor();

    }

    public function parseColor(){
        if($this->color){
            $colors=sscanf($this->color, '%02x%02x%02x');
            print_r($colors);
        }
    }
}

$myColor =new RGB("#ffef27"); 



?>