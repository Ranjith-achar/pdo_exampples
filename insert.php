<?
$db=new PDO('mysql:host=localhost;dbname=pdo_post;charset=utf8','root','root123');



$stmnt=$db->prepare("INSERT INTO 'pdo_post_table' ('id','titile','body')VALUES(?,?,?,?)");

$stmnt->bindValue(1,'');
$stmnt->bindValue(2,'dfdsf');
$stmnt->bindValue(3,'fadfdf');
$stmnt->bindValue(4,'sdfdsfdf');
$stmnt->execute();


?>
