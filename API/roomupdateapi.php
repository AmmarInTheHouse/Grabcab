<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	  $rid=$_POST['id'];
						   $rno=$_POST['room_number'];
						  
						   
                           $sql="update room set room_number='$rno' where id='$_POST[r_id]'";
	 mysqli_query($dbc, $sql);
     echo "success";

?>