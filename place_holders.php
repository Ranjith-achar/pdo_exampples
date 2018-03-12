<?php
/*

two placeholders

while passing valiues in prepared statments

$connection=new PDO(DSN);

We must take care of proper order of the
elements in the array that we are passing
to the PDOStatement::execute() method.

  0 => string 'sachin' (length=6)
 'first_name' => string 'sachin' (length=6)      here is first name is order
  1 => string 'tendulkar' (length=9)
  'last_name' => string 'tendulkar' (length=9)    here last name is order
  2 => string 'mumbai' (length=6)
  'city' => string 'mumbai' (length=6)



$stment=$connection->prepare(SELECT * FROM SOME_TABLE WHERE ID="? ANd NAME=?");//
question mark indicates its position place holder
we need to speify proper postion of array that we
pass to the execute statement using array

$connection=new PDO(DSN);

$stmnt=$connection->prepare(query where id = ? anh name = ?)
we need to specify proper position of elements in array that
we pass to prepared stamnt

where $stmnt is a prepared stement

$execute=execute->$stmnt()


we need to store those values in

another variables


$id = id(whic is databse valuse For example id=2)then
$id = '2';

$name=name(which is a datase value name=arjun)
$name='arjun';

passing postion holder values

$execute=execute->$stmnt(array($id,$name);)

while sending values we need to save thoe
values in seperate variabel the to pass as array

to execute staements

*/

?>
