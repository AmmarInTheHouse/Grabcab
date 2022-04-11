<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	
       $id=$_POST["id"];
                           $book_id=$_POST["book_id"];
						   $customer_id=$_POST["customer_id"];
						   $driver_id=$_POST['driver_id'];
						   $date=$_POST["date"];
						   $time=$_POST["time"];
						   $pickup_lat=$_POST["pickup_lat"];
						   $pickup_long=$_POST["pickup_long"];
						   $drop_lat=$_POST["drop_lat"];
						   $drop_long=$_POST["drop_long"];
						  
						   
                           $sql="update journey set book_id='$book_id' , customer_id='customer_id' ,driver_id='driver_id',date='date', time='time',pickup_lat='pickup_lat',pickup_long='pickup_long',drop_lat='drop_lat',drop_long='drop_long'where id='$_POST[id]'";
		
	 mysqli_query($dbc, $sql);
     echo "success";

?>