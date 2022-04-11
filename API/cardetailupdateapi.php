<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	 $cdid=$_POST['id'];
						   $crtype=$_POST['car_type_id'];
						   $crname=$_POST['car_name'];
						    $noplate=$_POST['no_plate'];
						  
						   
                           $sql="update car set car_type_id='$crtype',car_name='$crname',no_plate='$noplate' where id='$_POST[id]'";
	 mysqli_query($dbc, $sql);
     echo "success";

?>