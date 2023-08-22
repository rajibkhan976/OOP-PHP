<?php
include 'employee.php';
include 'animal.php';
include 'dog.php';
include 'cat.php';

$bulldog = new Dog('red');
echo $bulldog->makeSound();

$ragdoll = new Cat('white');
echo $ragdoll->makeSound();

$rajib = new Employee('Rajib', 'Software Developer');
$rajib->set_salary('100000 BDT');
$mySalary = $rajib->get_salary();
echo "Rajib's salary is" . $mySalary;

?>