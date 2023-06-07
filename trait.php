<?php
trait Loggable 
{
    public $message;
    public function operation ($message){
        $myfile = fopen("operation.txt", "w");
        fwrite($myfile, $message);
        fclose($myfile);
    }
    public function readFile(){
        $myfile = fopen("operation.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("operation.txt"));
        fclose($myfile);
    }
}

// $a=new Loggable();
// $a->operation('jamalMoh');
// $a->readFile();


?>