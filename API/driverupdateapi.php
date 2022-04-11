<?php
// retailer list
	include('conn.php');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	                      $Did=$_POST['id'];
						   $Dname=$_POST['name'];
						   $Dphoneno=$_POST['phone'];
                           $Duser=$_POST['username'];
						   $Dpass=$_POST['password'];
						   
                           $sql="update driver set name='$Dname', phone='$Dphoneno', username='$Duser', password='$Dpass' where id='$_POST[id]'";
                    //     echo $sql;
                           mysqli_query($dbc,$sql);
     echo "success";

?>