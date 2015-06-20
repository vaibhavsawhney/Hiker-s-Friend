<?php
$host="localhost";
$user="root";
$password="";
$db = mysql_connect($host, $user, $password) or die("Could not connect! Error:".mysql_error());
@mysql_select_db('karan_test') or die("Database Error:".mysql_error());
?>