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
	$result = mysqli_query($dbc, "select * from booking where id='$_REQUEST[u_id]'");
                                    while ($row = mysqli_fetch_array($result)) {
										$bid=$row["id"];
										$cid=$row["customer_id"];
                                        $rid = $row["room_id"];
										$bdate = $row["book_date"];
    }
    }
    ?>
      <input type="hidden"  id="id" name="id" value="<?php echo $bid; ?>" /> <br/> <br/>
    
  customer id  <input type="text"  id="customer_id" name="customer_id" value="<?php echo $cid; ?>" /> <br/> <br/>
room id: <input type="text" id="room_id" name="room_id" value="<?php echo $rid; ?>" /> <br/> <br/>
booking date: <input type="date" id="book_date" name="book_date" value="<?php echo $bdate; ?>" /> <br/> <br/>   


<input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit'])){
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                        $bid=$_POST['id'];
                           $cid=$_POST['customer_id'];
						   $rid=$_POST['room_id'];
						   $bdate=$_POST['book_date'];
						  
						   
                           $sql="update booking set id='$bid', customer_id='$cid',room_id='$rid',book_date='$bdate' where id='$_POST[id]'";
                     // echo $sql;
                           mysqli_query($dbc,$sql);
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=bookingdelete.php">';
        }
    ?>

</form>
</center>
   
   
    </body>
	</html>
    