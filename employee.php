<?php
class Employee {
    public $name;
    public $deisgnation;
    private $salary;

    function __construct($name, $deisgnation) {
        $this->name = $name;
        $this->deisgnation = $deisgnation;
    }

    function set_salary($salary) {
        $this->salary = $salary;
    }

    function get_salary() {
        return $this->salary . "<br>";
    }
}
?>