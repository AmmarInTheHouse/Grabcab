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
	$result = mysqli_query($dbc, "select * from car where id='$_REQUEST[u_id]'");
                                    while ($row = mysqli_fetch_array($result)) {
										$cdid=$row["id"];
                                        $crtype = $row["car_type_id"];
										$crname = $row["car_name"];
										$noplate = $row["no_plate"];
    }
    }
    ?>
    <input type="hidden"  id="id" name="id" value="<?php echo $cdid; ?>" /> <br/> <br/>
car type: <input type="text" id="car_type_id" name="car_type_id" value="<?php echo $crtype; ?>" /> <br/> <br/>
 car name: <input type="text" id="car_name" name="car_name" value="<?php echo $crname; ?>" /> <br/> <br/>   
  no plate: <input type="text" id="no_plate" name="no_plate" value="<?php echo $noplate; ?>" /> <br/> <br/>   


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $cdid=$_POST['id'];
						   $crtype=$_POST['car_type_id'];
						   $crname=$_POST['car_name'];
						    $noplate=$_POST['no_plate'];
						  
						   
                           $sql="update car set id='$cdid',car_type_id='$crtype',car_name='$crname',no_plate='$noplate' where id='$_POST[id]'";
                     // echo $sql;
                           mysqli_query($dbc,$sql);
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=cardetaildelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    