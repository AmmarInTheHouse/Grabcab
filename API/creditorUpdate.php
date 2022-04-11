<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$donor_id=$_REQUEST['donor_id'];
        $sql = "update customer set c_id = '1' where  donor_id='$donor_id' ";
	 mysqli_query($dbc, $sql);
     echo "success";

?>