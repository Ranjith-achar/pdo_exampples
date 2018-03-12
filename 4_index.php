<?php

/*$hostname='localhost';
$user='root';
$password='12345';
$hostname='pdo_post';
*/


try{


$db=new PDO('mysql:host=localhost;dbname=pdo_post;charset=utf8','root','root123');


}

catch(Exception $e){

echo $e->getMessage();


}
//var_dump($db);
