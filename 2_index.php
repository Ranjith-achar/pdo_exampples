<?php

/*$hostname='localhost';
$user='root';
$password='12345';
$hostname='pdo_post';
*/

$db=new PDO('mysql:host=localhost;dbname=pdo_post;charset=utf8','root','root123');




var_dump($db);




/*

var_dump ill check error wheather it ill connected it shows
as obj or it ill give error

we chandle error handling in pdo using try and catch



to connect


use dsn

data source name

('myql:host=localhoost;dbname=databasename;charaset=urf8','username','password')

*/




?>
