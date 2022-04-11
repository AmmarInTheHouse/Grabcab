<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<html>
<center>
<h2><u><b> Form  </b></u></h2>
<form method="post">
     <?php
include ("constans.php");
?>
     <?php
    
    if(isset($_GET['u_id']))
    {
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from journey where id='$_REQUEST[u_id]'");
        
                                    while ($row = mysqli_fetch_array($result)) {
										$Jid=$row['id'];
                                        $Jbookid=$row['book_id'];
                                        $Jcustid=$row['customer_id'];
                                        $Jdriverid=$row['driver_id'];
                                        $Jdate=$row['date'];
                                        $Jtime=$row['time'];
                                        $Jpicklat=$row['pickup_lat'];
                                        $Jpicklong=$row['pickup_long'];
                                        $Jdroplat=$row['drop_lat'];
                                        $Jdroplong=$row['drop_long'];
    }
    }
    ?>
<form method="post">
            <input type="hidden" name ="id" id= "id" value="<?php echo $Jid; ?>" /> <br> <br>
Journey Book_id: <input type="text" id="book_id" name="book_id" value="<?php echo $Jbookid; ?>" /> <br/> <br/>
Journey Customer_id: <input type="text" name="customer_id" id="customer_id" value="<?php echo $Jcustid; ?>" /> <br/> <br/>
Journey Driver_id: <input type="text" name="driver_id" id="driver_id" value="<?php echo $Jdriverid; ?>" /> <br/> <br/>
Journey Date: <input type="text" name="date" id="date" value="<?php echo $Jdate; ?>" /> <br/> <br/>
Journey Time: <input type="text" name="time" id="time" value="<?php echo $Jtime; ?>" /> <br/> <br/>
Journey Pickup_lat: <input type="text" id="pickup_lat" name="pickup_lat" value="<?php echo $Jpicklat; ?>" /> <br/> <br/>
Journey Pickup_long: <input type="text" name="pickup_long" id="pickup_long" value="<?php echo $Jpicklong; ?>" /> <br/> <br/>
Journey Drop_lat: <input type="text" name="drop_lat" id="drop_lat" value="<?php echo $Jdroplat; ?>" /> <br/> <br/>
Journey Drop_long: <input type="text" name="drop_long" id="drop_long" value="<?php echo $Jdroplong; ?>" /> <br/> <br/>
    

<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                                        $Jid=$_POST['id'];
                                        $Jbookid=$_POST['book_id'];
                                        $Jcustid=$_POST['customer_id'];
                                        $Jdriverid=$_POST['driver_id'];
                                        $Jdate=$_POST['date'];
                                        $Jtime=$_POST['time'];
                                        $Jpicklat=$_POST['pickup_lat'];
                                        $Jpicklong=$_POST['pickup_long'];
                                        $Jdroplat=$_POST['drop_lat'];
                                        $Jdroplong=$_POST['drop_long'];
						   
 $sql="update journey set book_id='$Jbookid' , customer_id='$Jcustid' , driver_id='$Jdriverid' , date='$Jdate' , time='$Jtime' , pickup_lat='$Jpicklat' , pickup_long='$Jpicklong' , drop_lat='$Jdroplat' , drop_long='$Jdroplong' where id='$_POST[id]'";
                    echo $sql;
                           mysqli_query($dbc,$sql);
                           //echo '<META HTTP-EQUIV="Refresh" Content="0; URL=journeydelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    