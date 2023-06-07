<?php

class Student
{
     public readonly int  $id ;
     public $name;
     public $email;
     public $course=array();

     public function __construct(  $id=0 , $name=null , $email=null  , $course=array())
     {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->course=$course;
     }
     public function getId()
     {
        return $this->id;
     }
     public function getName()
     {
        return $this->name;
     }
     public function getEmail()
     {
        return $this->email;
     }
     public function getCourse()
     {
        // foreach($this->course)
        return $this->course;
     }
     public function setId($id)
     {
        $this->id=$id;
     }
     public function setName($name)
     {
        $this->name=$name;
     }
     public function setEmail($email)
     {
        $this->email=$email;
     }
     public function setCourse($course)
     {
        $this->course=$course;
     }
  
}
$a=new Student();
$a->setCourse(['A','B' ,'C']);
$s= $a->getCourse();
echo "Courses: " . implode(', ', $s) ;





?>