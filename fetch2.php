<?php

$pdo=new PDO('mysql:host=localhost;dbname=new_pdo;charset=utf8','root','root123');

$first_name='gill';
$last_name='christ';
$stmt = $pdo->prepare('SELECT * FROM new_pdo_table WHERE first_name = ? AND last_name=?');
$stmt->execute([$first_name,$last_name]);
//$user = $stmt->fetch();


while($row=$stmt->fetch()){

echo $row['first_name']." ".$row['last_name']." ".$row['city']."</br>";


/*

fetching using positional place holders


with the question mark


we need to save values to variable


then to pass to execute statement


$stmnt->excute($variableone,variabl2);

in named plceholders



instead of varible we need to pass database value feilds as array

    $stmnt->execute()

*/
}
?>
