<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>
<form method="post">
  <p>Id:
  <input type="text" name ="txtid" value="" /> <br> <br>
    Customer id.: 
    <input type="text" name="txtcid" value="" /> 
  </p>
  <p>room id:
    <input type="text" name="txtrd" value="" />
  </p>
  <p>booking date::
    <input type="date" name="txtbd" value="" />
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
                           $ci=$_POST['txtci'];
						    $rd=$_POST['txtrd'];
                           $bd=$_POST['txtbd'];
					
						  
                           $sql="insert into booking(id,customer_id,room_id,book_date) values(0,'$ci','$rd','$bd')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
</body>
</html>