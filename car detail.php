<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
  <p>Id:
  <input type="text" name ="txtid" value="" /> <br> <br>
    Car type Id: 
    <input type="text" name="txtct" value="" /> 
  </p>
  <p>car name:
    <input type="text" name="txtcn" value="" />
  </p>
  <p>no plate::
    <input type="text" name="txtnp" value="" />
    <br/> 
    <br/>
    <br/>
    
    
    <input type="submit" name="submit"/>
  </p>
</form>
</center>



<?php
include ("constans.php");
?>

                    <?php
        if(isset($_POST['submit'])){        
                        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $id=$_POST['txtid'];
                           $ct=$_POST['txtct'];
						    $cn=$_POST['txtcn'];
                           $np=$_POST['txtnp'];
					
						  
                           $sql="insert into car(id,car_type_id,car_name,no_plate) values(0,'$ct','$cn','$np')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
</body>
</html>