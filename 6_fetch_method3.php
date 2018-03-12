<?php

include 'connect.php';

$stmnt=$db->query("SELECT * FROM  pdo_post_table");

while($row=$stmnt->fetch(PDO::FETCH_ASSOC)){

echo "<pre>" .var_dump($row). "</pre>";


}
/*
in fetch method another one method thr to fetch


PDO::FETCH_ASSOC

$connection=new PDO('mysql:host=localhot;')
;/same as prvious


in fetch method we can use three optuon


1. fecth()-> fetch resuluts

2. PDO::FETCH_ASSOC -> fetches result
as associative array

3. PDO::FETCH_OBJ -> fetch result as object

4. PDO::FETCH_NUM -> fetches result a
s numeric arrays

5. PDO::FETCH BOATH -> fetchees result
as numeric arrrays as well as associative


*/
?>
