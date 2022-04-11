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
Customer Name: <input type="text" name="txtname" value="" /> <br/> <br/>
Phone n0: <input type="text" name="txtpn" value="" /> <br/> <br/>


<input type="submit" name="submit"/>

</form>
</center>

<?php
include ("constans.php");
?>

                    <?php
        if(isset($_POST['submit'])){        
                        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $id=$_POST['txtid'];
                           $name=$_POST['txtname'];
						   $phoneno=$_POST['txtpn'];
                          
						  					

                           $sql="insert into customer(id,name,phone) values(0,'$name','$phoneno')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
    </body>
	</html>
    