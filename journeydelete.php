<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM journey WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Id</th>
                                        <th class="numeric">book_id</th>
                                        <th class="numeric">customer_id</th>
                                        <th class="numeric">driver_id</th>
                                        <th class="numeric">date</th>
                                        <th class="numeric">time</th>
                                        <th class="numeric">pickup_lat</th>
                                        <th class="numeric">pick_long</th>
                                        <th class="numeric">drop_lat</th>
                                        <th class="numeric">drop_long</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from journey");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
                                        $b_id = $row["book_id"];
										$c_id=$row["customer_id"];
										$d_id=$row["driver_id"];
										$jdate=$row["j_date"];
										$jtime=$row["time"];
										$plat=$row["pickup_lat"];
										$plong=$row["pickup_long"];
										$dlat=$row["drop_lat"];
										$dlong=$row["drop_long"];
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $id; ?></td>
                                        <td data-title="book_id"><?php echo $b_id; ?></a></td>
                                            <td data-title="customer_id"><?php echo $c_id; ?></td>
                                            <td data-title="driver_id"><?php echo $d_id; ?></td>
                                            	<td data-title="date"><?php echo $jdate; ?></td>
                                                <td data-title="time"><?php echo $jtime; ?></td>
                                                <td data-title="pickup_lat"><?php echo $plat; ?></td>
                                                <td data-title="pickup_long"><?php echo $plong; ?></td>
                                                <td data-title="drop_lat"><?php echo $dlat; ?></td>
                                                <td data-title="drop_long"><?php echo $dlong; ?></td>
                                                	<td data-title="Operations" align="center">
                                                    	<a href="journeyupdate.php?u_id=<?php echo $id; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="journeydelete.php?u_id=<?php echo $id; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>