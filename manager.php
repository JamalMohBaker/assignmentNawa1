<?php

include_once 'trait.php';


// use Loggable;
class Manager 
    
{
    public $message ;
    public $ads=array();
    public function addStudent($id , $name , $email , $course=array()){
       
    $this->ads = array(
        "$id" => array(
            "ID" => "$id",
            "name" => "$name",
            "email" => "$email",
            "course" => [$course]
        )
        
        );
     $this->message = "Student with ID $id has been added 'message from file'.<br>";
    }
    public function getInfoStu($id){
        foreach(($this->ads[$id]) as $k => $v)
        {
            echo $k . " IS => ";
        if (is_array($v)) {
            print_r($v);
            // echo "Courses: " . implode(', ', $v) ;
        } else {
            echo $v;
        }
        
        echo "<br>";
        }
    }
    public function deleteStudent($id){
        if (isset($this->ads[$id])) {
            unset($this->ads[$id]);
            echo "Student with ID $id has been deleted.<br>";
            $this->message = "Student with ID $id has been deleted 'message from file'.<br>";
            return true; // Return true to indicate successful deletion
        }
        echo "Student with ID $id doesn't exist.<br>";
        return false; // Return false if student with given ID doesn't exist
    }
   
    public function updateStu($id , $nameNew,$emailNew, $courseNew=array())
    {
        if (isset($this->ads[$id])) {
            $this->ads[$id]['name'] = "$nameNew";
            $this->ads[$id]['email'] = "$emailNew";
            $this->ads[$id]['course'] = [$courseNew];
            echo "Updated successfully";
            $this->message = "Student with ID $id has been Updated 'message from file'.<br>";
            return true;
        }
        echo "Updated Failed";
        return false;

    }
    public function message(){
       return $this->message;
    }
}
class opendir{
    use Loggable;
}

// $m=new Manager();
// $m->addStudent(1,"Jamal","A@a.com",['A','B','C']);
// // $m->addStudent(2,"Hani","B@b.com");
// $m->getInfoStu(1);
// echo "<br>";
// // $deleted = $m->deleteStudent(1);
// echo "<br>";
// $m->updateStu(1,"jamalBash","newEmail",['H','K']);
// echo "<br>";
// // $m->getInfoStu(1);
// $m->getInfoStu(1);
// echo "<br>";
// // $deleted = $m->deleteStudent(1);
// $lo=new opendir();
// $lo->operation($m->message());
// $lo->readFile();
?>