<?php 
/* 
class
- blueprint to make object
- to make class, use keyword 'class' and follow by class name,  {}
object
- instance from class
- we can make more than one object using one class
- to make object, use keyword new after object name.
*/

//clas example
class myClass  {

}

//object example
$myObj = new myClass();
var_dump($myObj);

//make another object 
$myObj2 = new myClass();
var_dump($myObj2);

//study case : make class and object
class Users {

}

$users = new Users();

?>