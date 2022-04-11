<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	                      $carid=$_POST['id'];
						   $cartype=$_POST['cartype'];
						  
						   
                           $sql="update car_type set car_type='$cartype' where id='$_POST[id]'";
                   // echo $sql;
                           mysqli_query($dbc,$sql);
     echo "success";

?>