<?php
class Person {
    public $name;
    public $age;

    
    public function __construct($studentName, $studentAge) {
        $this->name = $studentName;
        $this->age = $studentAge;


    }

    public function showInfo() {
        echo "Name: $this->name, Age: $this->age";
    }
}

$student1 = new Person("Saima Hoque", 25);

$student1->showInfo();
?>