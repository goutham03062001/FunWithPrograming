<?php 

include 'connection.php';

if(isset($POST['submit']))
{
	$newsemail = $_POST['news_email'];
	$query = "insert into newspaper('email') values($newsemail)";
	//user details are inserted into database

}

 ?>