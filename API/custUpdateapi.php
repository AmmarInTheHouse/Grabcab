<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	
       
		 $id=$_POST['id'];
						   $name=$_POST['name'];
						   $phone=$_POST['phone'];
						  
						   
                           $sql="update customer set name='$name',phone='$phone' where id='$_POST[id]'";
	 mysqli_query($dbc, $sql);
     echo "success";

?>