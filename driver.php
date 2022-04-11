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
<input type="hidden" name ="id" value="" /> <br> <br>
Driver Name: <input type="text" name="name" value="" /> <br/> <br/>
Driver Phone no.: <input type="text" name="phone" value="" /> <br/> <br/>
Driver Username: <input type="text" name="username" value="" /> <br/> <br/>
Driver Password: <input type="text" name="password" value="" /> <br/> <br/>


<input type="submit" name="submit"/>

</form>
</center>

<?php
include ("constans.php");
?>

                    <?php
        if(isset($_POST['submit'])){        
                        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $Did=$_POST['id'];
                           $Dname=$_POST['name'];
						   $Dphoneno=$_POST['phone'];
                           $Duser=$_POST['username'];
					       $Dpass=$_POST['password'];
						  
                           $sql="insert into driver(id,name,phone,username,password) values('$Did','$Dname','$Dphoneno','$Duser','$Dpass')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
    </body>
	</html>
    