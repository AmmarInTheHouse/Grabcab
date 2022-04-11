<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	  $bid=$_POST['id'];
                           $cid=$_POST['customer_id'];
						   $rid=$_POST['room_id'];
						   $bdate=$_POST['book_date'];
						  
						   
                           $sql="update booking set customer_id='$cid',room_id='$rid',book_date='$bdate' where id='$_POST[id]'";
	 mysqli_query($dbc, $sql);
     echo "success";

?>