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
    Car Type ID: <input type="text" name="carid" value="" /> <br/> <br/>
Car Type: <input type="text" name="cartype" value="" /> <br/> <br/>
    


<input type="submit" name="submit"/>

</form>
</center>

<?php
    
    
    
include ("constans.php");

    
    
    ?>

                    <?php
        if(isset($_POST['submit'])){        
                        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                           
                            $carid=$_POST['carid'];
                           $cartype=$_POST['cartype'];
                            
						  
                          
					
						  
                           $sql="insert into car_type(id,car_type) values(1,'$cartype')";
                           mysqli_query($dbc,$sql);
                           
                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
							
		}
    ?>
    </body>
	</html>
    