<?php
//coupon table data list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
        $sql = "select * from room";
	$result=  mysqli_query($dbc, $sql);
        $r = array();
	while ($row = mysqli_fetch_assoc($result))
	{
		$r[] = $row;
	
	}
	print json_encode($r);

?>