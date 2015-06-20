<?php
//include("connect.php");
if(isset($_POST["submit"]))
{
$emailId=$_POST["emailId"];
$pass=$_POST["pass"];
echo $emailId." ".$pass;
//mysql_query("INSERT INTO emailid VALUES('$a','$b')");
}
?>