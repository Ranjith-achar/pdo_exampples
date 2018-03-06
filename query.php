<?php

include 'connect.php';

foreach($db->query("SELECT * FROM pdo_post_table") as $row ){

   echo $row['titile']." ".$row['body']." ".$row['author']."</br>";


//echo "</br>";

// echo $row['author'];


// echo "</br>";
}




?>
