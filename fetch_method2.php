<?php

include 'connect.php';

//foreach($db->query("SELECT * FROM pdo_post_table") as $row ){
$stmnt=$db->query("SELECT * FROM pdo_post_table");
while($row=$stmnt->fetch())
{

//echo $row['titile']." ".$row['body']." ".$row['author']."</br>";


echo "<pre>" . var_dump($row) . "</pre>";

/*we can check the content of fetched array

using var dump 

*/


}
?>
