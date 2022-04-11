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
	$result = mysqli_query($dbc, "select * from car_type where id='$_REQUEST[u_id]'");
                                    while ($row = mysqli_fetch_array($result)) {
										$carid=$row["id"];
                                        $cartype = $row["car_type"];
    }
    }
    ?>
    <input type="hidden"  id="id" name="id" value="<?php echo $carid; ?>" /> <br/> <br/>
Car Type: <input type="text" id="cartype" name="cartype" value="<?php echo $cartype; ?>" /> <br/> <br/>
    


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $carid=$_POST['id'];
						   $cartype=$_POST['cartype'];
						  
						   
                           $sql="update car_type set car_type='$cartype' where id='$_POST[id]'";
                   // echo $sql;
                           mysqli_query($dbc,$sql);
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=cartypedelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    