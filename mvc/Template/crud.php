<?php
class fruits{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct(){
        echo "The color of $this->name is $this->color";
    }
}

$apple = new fruits("Apple", "Red");

?>