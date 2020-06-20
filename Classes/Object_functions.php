<?php


class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa){

        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
        
    }

    //function that check if you have honor or not
    function hasHonors(){
        if ($this->gpa >= 3.5) {
            //echo "You have honor";
            return "true";
        } else {
            //echo "You don't have honor";
            //in here you usually want to print boolean not a string but just to have a simple UI I used string
            return "false";
        }
    }
    
}

$student1 = new Student("Hakime", "Computer Science", 3.6);
$student2 = new Student("Salim", "Business", 2.8);

//print function
echo $student1->hasHonors();