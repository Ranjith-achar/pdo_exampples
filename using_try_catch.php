<?php


try{

  $databaseObject=new PDO('mysql:host=localhostl;dbname=databasename:charset=utf8'"username","password");
}
/*catch Exeception($e){


//if anything goes wrong if database connection
//then this code ill executes

}*/

if($databaseObject){


echo "connected succefulyy";

}

catch (PDOExeception $e){

   echo $e->getMessege();



}










?>
