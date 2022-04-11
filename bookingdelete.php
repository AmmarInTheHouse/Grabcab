<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM booking WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Id</th>
                                        <th class="numeric">Customer id</th>
                                        <th class="numeric">Room id</th>
                                        <th class="numeric">booking date</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from booking");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
                                        $cid = $row["customer_id"];
										$rid=$row["room_id"];
										$bd=$row["book_date"];
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $id; ?></td>
                                        <td data-title="customer id"><?php echo $cid; ?></a></td>
                                            <td data-title="room id"><?php echo $rid; ?></td>
                                            	 <td data-title="booking date"><?php echo $bd; ?></td>
                                                	<td data-title="Operations" align="center">
                                                    	<a href="bookingupdate.php?u_id=<?php echo $id; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="bookingdelete.php?u_id=<?php echo $id; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>