<?php

$db=new PDO('mysql:host=localhost;dbname=pdo_post;charset=utf8','root','root123');


$sql = 'SELECT id, titilt, body FROM pdo_post_table';
try {
  $stmt = $db->query($sql);
  $result = $stmt->setFetchMode(PDO::FETCH_NUM);
  while ($row = $stmt->fetch()) {
    print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
  }
}
catch (PDOException $e) {
  print $e->getMessage();
}
?>
