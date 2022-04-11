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
	$result = mysqli_query($dbc, "select * from customer where id='$_REQUEST[u_id]'");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
                                        $name = $row["name"];
										$phone = $row["phone"];
    }
    }
    ?>
    <input type="hidden"  id="id" name="id" value="<?php echo $id; ?>" /> <br/> <br/>
Customer Name: <input type="text" id="name" name="name" value="<?php echo $name; ?>" /> <br/> <br/>
 Customer phone: <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" /> <br/> <br/>   


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $id=$_POST['id'];
						   $name=$_POST['name'];
						   $phone=$_POST['phone'];
						  
						   
                           $sql="update customer set id='$id',name='$name',phone='$phone' where id='$_POST[id]'";
                     // echo $sql;
                           mysqli_query($dbc,$sql);
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=customerdelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    