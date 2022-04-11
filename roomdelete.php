<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM room WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                    <th class="numeric">Room id</th>
                                       <th class="numeric">Room No</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from room");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
										$rno=$row["room_number"];
                                       ///$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $id; ?></td>
                                       <td data-title="Room No"><?php echo $rno; ?></td>
                                            	
                                                	<td data-title="Operations" align="center">
                                                    	<a href="roomupdate.php?u_id=<?php echo $id; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="roomdelete.php?u_id=<?php echo $id; ?>&delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>