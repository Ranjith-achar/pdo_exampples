<?php

include 'connect.php';

$stmnt=$db->prepare("SELECT * FROM  pdo_post_table WHERE id=?");
//$stmnt->bindValue(1,'1');
$stmnt->bindValue(1,'1');
$stmnt->execute();

while($row=$stmnt->fetch(PDO::FETCH_ASSOC)){

echo var_dump($row);


}


/*


$stmnt=$db->query//prvious method

but now


$stmnt=$db->prepare(as usual noral mysql
query in place of db col names we use here ? ?) -> which position plce holder


$stmnt=$db->prepare(as usual noral mysql
query in place of db col names we use here ? ?) ->
which named plce holder :anme :name




*/




?>
