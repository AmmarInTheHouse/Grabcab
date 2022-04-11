<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM car_type WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Id</th>
                                        <th class="numeric">Car Type</th>
                                        
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from car_type");
                                    while ($row = mysqli_fetch_array($result)) {
										$Cid=$row["id"];
                                        $Cartype = $row["car_type"];
										
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $Cid; ?></td>
                                        <td data-title="Name"><?php echo $Cartype; ?></a></td>
                                            
                                            	
                                                	<td data-title="Operations" align="center">
                                                    	<a href="cartypeupdate.php?u_id=<?php echo $Cid; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="cartypedelete.php?u_id=<?php echo $Cid; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>