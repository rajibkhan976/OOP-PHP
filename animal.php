<?php
class Animal {
    public $color;

    function __construct($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
    
    public function makeSound() {
        // Default implementation for making sound
        echo "The animal makes a sound.\n";
    }
}
?>