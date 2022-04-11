<?php
include 'constans.php';

if(isset($_GET['u_id']))
	{			
	
		$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
		mysqli_query($dbc,"DELETE FROM customer WHERE id='$_GET[u_id]'");
	}
?>

                                <table>
                                    <tr>
                                        <th class="numeric">Id</th>
                                        <th class="numeric">Customer Name</th>
                                        <th class="numeric">Phone No</th>
                                        
                                        <th class="numeric">Operations</th>
                                    </tr>
                                    <tbody>
                                    
                                    <?php
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
	$result = mysqli_query($dbc, "select * from customer");
                                    while ($row = mysqli_fetch_array($result)) {
										$id=$row["id"];
                                        $name = $row["name"];
										$phone=$row["phone"];
										//$imei=$row["imei"];?>
                                  <tr>
                                <td data-title="Id"><?php echo $id; ?></td>
                                        <td data-title="Name"><?php echo $name; ?></a></td>
                                            <td data-title="Phone"><?php echo $phone; ?></td>
                                            	
                                                	<td data-title="Operations" align="center">
                                                    	<a href="customerupdate.php?u_id=<?php echo $id; ?>">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Edit</button></a>
                                                        <a href="customerdelete.php?u_id=<?php echo $id; ?>&amp;delete=delete">
                                                        	<button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;Delete</button></a>
                                       </td>
                                    </tr>
                                   <?php } ?>
                                      


                                    </tbody>
                                </table>