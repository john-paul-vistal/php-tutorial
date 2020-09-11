<?php
    // //Creation of class
    // class Student{
    //     public $name;
    //     public $age;
    //     public $gender;

    //     public function __construct($name,$age,$gender){
    //         $this->name = $name;
    //         $this->age = $age;
    //         $this->gender = $gender;
    //     }

    //     public function login(){
    //         echo $this->name ."login ";
    //     }
    // }


    // //class instatiation
    // $student = new Student('JOHN PAUL VISTAL',19,'MALE');

    // //accessing inside the class
    // //$student->login();
    // //echo $student->name;



    class Student{
        private $name;
        private $age;
 
        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        public function login(){
            echo $this->name ."login ";
        }

        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }

        

        public function setName($name){
            if(is_string($name)&&strlen($name)>1){
                $this->name = $name;
            }
        }
        public function setAge($age){
           $this->age = $age;
        }

    }

    $student = new Student('John Paul Vistal',19);

    echo $student->getName();
    echo $student->setName("SHAWN");
    echo $student->getName();
    echo $student->getAge();

?>