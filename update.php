<?php 
	include("conn.php");
	
	$phone_no=$_REQUEST['phone_no'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	
	
 		$sql = "update user set name='$name',email='$email' where phone_no = '$phone_no'";
		mysql_query($sql);
		
 		 print json_encode("update_success");
?>

