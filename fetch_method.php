<?php

include 'connect.php';

//foreach($db->query("SELECT * FROM pdo_post_table") as $row ){

$stmnt=$db->query("SELECT * FROM pdo_post_table");


while($row=$stmnt->fetch())


{


echo $row['titile']." ".$row['body']." ".$row['author']."</br>";

}




/*dsn*


$db=new PDO('mysql:host=localhost;dbname=databasename;
charset=utf8'username password)


query method


$querymethod variable=$db->query("sql statmengs");

while($row=$querymethod variable->fetch())


*/



?>
