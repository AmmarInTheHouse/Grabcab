<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM car WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Id</th>
                                        <th class="numeric">car type</th>
                                        <th class="numeric">car name</th>
                                        <th class="numeric">no plate</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from car");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
                                        $ct = $row["car_type_id"];
										$cn=$row["car_name"];
										$np=$row["no_plate"];
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $id; ?></td>
                                        <td data-title="car type"><?php echo $ct; ?></a></td>
                                            <td data-title="car name"><?php echo $cn; ?></td>
                                            	 <td data-title="no plate"><?php echo $np; ?></td>
                                                	<td data-title="Operations" align="center">
                                                    	<a href="cardetailupdate.php?u_id=<?php echo $id; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="cardetaildelete.php?u_id=<?php echo $id; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>