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
Id: <input type="text" name ="txtid" value="" /> <br> <br>
Book_id: <input type="text" name="txtb" value="" /> <br/> <br/>
Customer_id: <input type="text" name="txtc" value="" /> <br/> <br/>
Driver_id: <input type="text" name="txtd" value="" /> <br/> <br/>
Date: <input type="date" name="txtdate" value="" /> <br/> <br/>
Time: <input type="text" name="txttime" value="" /> <br/> <br/>
pick up_latitute: <input type="text" name="txtpick" value="" /> <br/> <br/>
pick up_longitute: <input type="text" name="txtpickl" value="" /> <br/> <br/>
drop up_latitute: <input type="text" name="txtdrop" value="" /> <br/> <br/>
drop up_longitute: <input type="text" name="txtdropl" value="" /> <br/> <br/>


<input type="submit" name="submit"/>

</form>
</center>

<?php
include ("constans.php");
?>

                    <?php
        if(isset($_POST['submit'])){        
                        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $j_id=$_POST['txtid'];
                           $bid=$_POST['txtb'];
						   $cid=$_POST['txtc'];
						   $did=$_POST['txtd'];
						   $jdate=$_POST['txtdate'];
						   $jtime=$_POST['txttime'];
						   $picklat=$_POST['txtpick'];
						   $picklon=$_POST['txtpickl'];
						   $droplat=$_POST['txtdrop'];
						   $droplong=$_POST['txtdropl'];
                          
					
						  
                           $sql="insert into journey(id,book_id,customer_id,driver_id,date,time,pickup_lat,pickup_long,drop_lat,drop_long) values(0,'$bid','$cid','$did','$jdate','$jtime','$picklat','$picklon','$droplat','$droplong')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
    </body>
	</html>
    