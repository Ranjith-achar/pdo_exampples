<?php

include 'connect.php';

//foreach($db->query("SELECT * FROM pdo_post_table") as $row ){
/*
$stmnt=$db->query("SELECT * FROM pdo_post_table");

while($row=$stmnt->fetch())
{

//cho $row['titile']." ".$row['body']." ".$row['author']."</br>";


echo "<pre>" . var_dump($row) . "</pre>";

}
*/
$stmnt=$db->query("SELECT * FROM  pdo_post_table");

while($row=$stmnt->fetch(PDO::FETCH_ASSOC)){

echo "<pre>" .var_dump($row). "</pre>";


}

?>
