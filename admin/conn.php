<?php
ini_set('display_errors',false);

mysql_connect("localhost","root","") or die("Connection not successful".mysql_error());
mysql_select_db("stop_all") or die("selection not successful");

?>
