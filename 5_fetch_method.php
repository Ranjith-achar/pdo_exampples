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

/*

$connecion=new PDO//pdo object('mysql:host=localhost;
dbbame=databasename;\
charset=utf8',"username","password")

query noraml method


$varibleToholdForFetch=$coneection->query("mysql query");

its equal to


$query=mysqli_query(mysql qquery);

$connection=query->fetch();

then as usula whike loop to print results





*/
?>
