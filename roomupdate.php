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
	$result = mysqli_query($dbc, "select * from room where id='$_REQUEST[u_id]'");
                                    while ($row = mysqli_fetch_array($result)) {
										$rid=$row["id"];
                                        $rno=$row["room_number"];
    }
    }
    ?>
    <input type="hidden"  id="id" name="id" value="<?php echo $rid; ?>" /> <br/> <br/>
Room no: <input type="text" id="room_number" name="room_number" value="<?php echo $rno; ?>" /> <br/> <br/>
    


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                           $rid=$_POST['id'];
						   $rno=$_POST['room_number'];
						  
						   
                           $sql="update room set room_number='$rno' where id='$_POST[id]'";
                     //      echo $sql;
                           mysqli_query($dbc,$sql);
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=roomdelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    