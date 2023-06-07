<?php
// use Loggable;
include_once 'manager.php';
$m=new Manager();
$m->addStudent(1,"Jamal","A@a.com",['A','B','C']);
// $m->addStudent(2,"Hani","B@b.com");
$m->getInfoStu(1);
echo "<br>";
// $deleted = $m->deleteStudent(1);
echo "<br>";
$m->updateStu(1,"jamalBash","newEmail",['H','K']);
echo "<br>";
// $m->getInfoStu(1);
$m->getInfoStu(1);
echo "<br>";
// $deleted = $m->deleteStudent(1);

$lo=new opendir();
$lo->operation($m->message());
$lo->readFile();



?>