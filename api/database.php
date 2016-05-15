<?php
  $con = mysql_connect("localhost","root","armsozk38");
     if (!$con) {  die('Could not connect: ' . mysql_error());  }
  mysql_select_db("cooperative_bear", $con);
  mysql_query("SET NAMES UTF8");
?>
