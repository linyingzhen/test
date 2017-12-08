<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

mysql_query("insert into persons (firstname,age,lastname) values ('lin','11','30')");

mysql_close($con);
?>