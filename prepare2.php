<?php

include 'connect.php';

/*$stmnt=$db->prepare("SELECT * FROM  pdo_post_table WHERE id=?");
$stmnt->bindValue(1,'1');
$stmnt->execute();

while($row=$stmnt->fetch(PDO::FETCH_ASSOC)){

echo var_dump($row);
*/

$stmnt=$db->prepare("SELECT * FROM pdo_table WHERE author=?");
$stmnt->bindValue(4,'first author');
$stmnt->execute();



while($row=$stmnt->fetch(PDO::FETCH_ASSOC)){

echo var_dump($row);

}

?>
