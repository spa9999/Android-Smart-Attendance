<?php
mysql_connect("MYSQL5002.Smarterasp.net","9ab3ca_pranu","*******");
mysql_select_db("db_9ab3ca_pranu");
 
$q=mysql_query("SELECT * FROM students WHERE faculty='".$_REQUEST['username']."' and subject='".$_REQUEST['subject']."'");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
print(json_encode($output));
 
mysql_close();
?>
