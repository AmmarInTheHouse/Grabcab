<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM driver WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Driver Id</th>
                                        <th class="numeric">Driver Name</th>
                                        <th class="numeric">Driver Phone No</th>
                                        <th class="numeric">Driver Username</th>
                                        <th class="numeric">Driver Password</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from driver");
                                    while ($row = mysqli_fetch_array($result)) {
										$Did=$row["id"];
                                        $Dname = $row["name"];
										$Dphone=$row["phone"];
                                        $Duser=$row["username"];
                                        $Dpass=$row["password"];
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $Did; ?></td>
                                        <td data-title="Name"><?php echo $Dname; ?></a></td>
                                            <td data-title="Phone"><?php echo $Dphone; ?></td>
                                            <td data-title="Username"><?php echo $Duser; ?></td>
                                            <td data-title="Password"><?php echo $Dpass; ?></td>

                                                	<td data-title="Operations" align="center">
                                                    	<a href="driverupdate.php?u_id=<?php echo $Did; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="driverdelete.php?u_id=<?php echo $Did; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>