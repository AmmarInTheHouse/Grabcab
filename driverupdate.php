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
	$result = mysqli_query($dbc, "select * from driver where id='$_REQUEST[u_id]'");
        
                                    while ($row = mysqli_fetch_array($result)) {
										$Did=$row['id'];
                                        $Dname=$row['name'];
                                        $Dphoneno=$row['phone'];
                                        $Duser=$row['username'];
                                        $Dpass=$row['password'];
    }
    }
    ?>
<form method="post">
            <input type="hidden" name ="id" id= "id" value="<?php echo $Did; ?>" /> <br> <br>
Driver Name: <input type="text" id="name" name="name" value="<?php echo $Dname; ?>" /> <br/> <br/>
Driver Phone no.: <input type="text" name="phone" id="phone" value="<?php echo $Dphoneno; ?>" /> <br/> <br/>
Driver Username: <input type="text" name="username" id="username" value="<?php echo $Duser; ?>" /> <br/> <br/>
Driver Password: <input type="text" name="password" id="password" value="<?php echo $Dpass; ?>" /> <br/> <br/>
    


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $Did=$_POST['id'];
						   $Dname=$_POST['name'];
						   $Dphoneno=$_POST['phone'];
                           $Duser=$_POST['username'];
						   $Dpass=$_POST['password'];
						   
                           $sql="update driver set name='$Dname', phone='$Dphoneno', username='$Duser', password='$Dpass' where id='$_POST[id]'";
                    //     echo $sql;
                           mysqli_query($dbc,$sql);
                           echo '<META HTTP-EQUIV="Refresh" Content="0; URL=driverdelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    