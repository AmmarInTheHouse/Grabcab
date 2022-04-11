<?php
include('constans.php');

//require"session_all.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coupon | Extras</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
        <?php include('script1.php');?>
       
        <style type="text/css">
            label.space{
                margin: 0px;
            }
        </style>
    </head>
    <body class=" ">
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <?php include('topbar.php'); ?>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                
                <!--END SIDEBAR MENU-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title"> Update Journey </div>
                        </div>
                       
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->
                    <div class="page-content">
                        <div class="panel panel-orange">
                            <div class="panel-heading"> Update Journey </div>
                            <div class="panel-body pan">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-body pal">
                                        <div class="row">
										<?PHP
                                                    $id = $_GET[id];
                                                    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQl server.');
                                                    $sql = "SELECT * FROM `journey` WHERE `id` = '$id'";
                                                    $result = mysqli_query($dbc, $sql);
                                                    $row = mysqli_fetch_array($result);
                                                    ?>
										<div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                               <label for="bookid" class="col-md-3 control-label">Book ID<span class="require">*</span></label>
												<input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="book_id" name="book_id" tabindex="1"  type="text" required placeholder="book_id" value="<?php echo $row["book_id"] ;?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                           
                                            
                                           <div class=" col-md-6 form-group">
                                                <label for="custid" class="col-md-3 control-label">Customer ID<span class="require">*</span></label>
                                                <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="custid" name="custid" tabindex="2" type="text" required placeholder="Customer ID"  value="<?php echo $row["customer_id"];?>"class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                               
                                            </div>
                                            </div>
                                        <br>
                                            <br>
                                             <div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="driverid" class="col-md-3 control-label">Driver ID<span class="require">*</span></label>
                                                 <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="driverid" name="driverid" tabindex="1"  type="text" required placeholder="Driver ID"  value="<?php echo $row["driver_id"];?>"class="form-control" >
                                                    </div>
                                                </div>
                                            </div> 
                                           

                                               
                                            <div class=" col-md-6 form-group">
                                                <label for="date" class="col-md-3 control-label">Date<span class="require">*</span></label>
 <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 
                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="date" name="date" tabindex="2" type="date" required placeholder="Date" value="<?php echo $row["date"];?>"class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                  
                                           
                                            
											<div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="time" class="col-md-3 control-label">Time<span class="require">*</span></label>
                                                <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 


                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="time" name="time" tabindex="1"  type="text" required placeholder="Time" value="<?php echo $row["time"] ;?>"class="form-control" >
                                                    </div>
                                                </div>
                                            </div> 
											
                                            <div class=" col-md-6 form-group">
                                                <label for="pickuplat" class="col-md-3 control-label">PickUp Latitude<span class="require">*</span></label>
                                                <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 


                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="pickuplat" name="pickuplat" tabindex="2" type="text" required placeholder="Pickup Latitude" value="<?php echo $row["pickup_lat"]; ?>"class="form-control">
                                                    </div>
                                                </div>
                                            </div>
											<br>
											<br>
											<div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="pickuplog" class="col-md-3 control-label">PickUp Longitude<span class="require">*</span></label>
                                                <input type="hidden" value="<?php echo $_GET["id"] ?>"/> 


                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="pickuplog" name="pickuplog" tabindex="1"  type="text" required placeholder="PickUp Longitude" value="<?php echo $row["pickup_long"]; ?>"class="form-control" >
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class=" col-md-6 form-group">
                                                <label for="droplat" class="col-md-3 control-label">Drop Latitude<span class="require">*</span></label>
<input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="droplat" name="droplat" tabindex="2" type="text" required placeholder="Drop Latitude" value="<?php echo $row["drop_lat"]; ?>"class="form-control">
                                                    </div>
                                                </div>
                                            </div>
											<br>
											<br>
											<div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="droplog" class="col-md-3 control-label">Drop Longitude<span class="require">*</span></label>
<input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="droplog" name="droplog" tabindex="1"  type="text" required placeholder="Drop Longitude" value="<?php echo $row["drop_long"]; ?>"class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
											         
                                        </div>
                            <div class="form-actions text-right pal">
                                <input type="submit" name="submit" tabindex="4" class="btn btn-success" value="Update" />
                            </div>
                                        
                                        
                           
                        </form>
                                
                            
                    
                        
                        <?php

                        if (isset($_POST["submit"])) {
                            $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQl server.');
                            $bookid = $_POST["book_id"];
                            $custid = $_POST["customer_id"];	
							 $driverid = $_POST["driver_id"];
							  $date = $_POST["date"];	
							   $time = $_POST["time"];	
							    $pickuplat = $_POST["pickup_lat"];
								$pickuplong = $_POST["pickup_long"];	
								$droplat = $_POST["drop_lat"];
								$droplong = $_POST["drop_lat"];							
                            $sql = "update journey set book_id='$bookid',customer_id='$custid',driver_id='$driverid',date='$date',time='$time',pickup_lat='$pickuplat',pickup_long='$pickuplong',drop_lat='$droplat',drop_long='$droplong' where id='$_REQUEST[id]'";
                            mysqli_query($dbc, $sql);
                            ?>
                            <script src="js/notie.js"></script>
                            <script src="js/toaster.js"></script>
                            <script type="text/javascript">
								var result = "Update successfully"
								success(result);
                            </script>
							<?php
							if($_GET["openingstock"]==1)
                            {
								?>
								<meta http-equiv="refresh" content="0;url=admin_details_journey.php"  />
								<?php
							}else{
								?>
							     <meta http-equiv="refresh" content="0;url=admin_details_journey.php"  />	
								<?php
							}
                        }
                        ?>
                    </div>
                </div>

            </div>
            <!--END CONTENT-->

            <!--BEGIN CONTENT QUICK SIDEBAR-->
            <?php include('rightsidebar.php'); ?>
            <!--END CONTENT QUICK SIDEBAR-->
        </div>
        <!--BEGIN FOOTER-->
        <div id="footer">
            <?php include 'footer.php'; ?>
        </div>
        <!--END FOOTER-->
        <!--END PAGE WRAPPER-->
    </div>
</div>
<?php include('script2.php'); ?>
</body>
</html>
