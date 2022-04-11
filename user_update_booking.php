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
                            <div class="page-title"> Update Booking </div>
                        </div>
                       
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->
                    <div class="page-content">
                        <div class="panel panel-orange">
                            <div class="panel-heading"> Update Booking </div>
                            <div class="panel-body pan">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-body pal">
                                        <div class="row">
										<?PHP
                                                    $id = $_GET[id];
                                                    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQl server.');
                                                    $sql = "SELECT * FROM `booking` WHERE `id` = '$id'";
                                                    $result = mysqli_query($dbc, $sql);
                                                    $row = mysqli_fetch_array($result);
                                                    ?>
										<div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="custid" class="col-md-3 control-label">Customer ID<span class="require">*</span></label>
												<input type="hidden" value="<?php echo $_GET["id"] ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="custid" name="custid" tabindex="1"  type="text" required placeholder="Customer ID" value="<?php echo $row["customer_id"] ;?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                           
                                            
                                            <div class=" col-md-6 form-group">
                                                <label for="roomid" class="col-md-3 control-label">Room ID<span class="require">*</span></label>
												<input type="hidden" value="<?php echo $_GET["id"]; ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="roomid" name="roomid" tabindex="1"  type="text" required placeholder="Room ID" value="<?php echo $row["room_id"] ;?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
											
											<div class=" col-md-6 form-group">
                                                <label for="bookdate" class="col-md-3 control-label">Booking Date<span class="require">*</span></label>
												<input type="hidden" value="<?php echo $_GET["id"]; ?>"/> 

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="bookdate" name="bookdate" tabindex="1"  type="date" required placeholder="Booking Date" value="<?php echo $row["book_date"] ;?>" class="form-control">
                                                    </div>
                                                </div>
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
                            $custid = $_POST["custid"];
							$roomid = $_POST["roomid"];
							$bookdate = $_POST["bookdate"];
                           							
                            $sql = "update booking set customer_id='$custid', room_id='$roomid', book_date='$bookdate' where id='$_REQUEST[id]'";
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
								<meta http-equiv="refresh" content="0;url=admin_details_booking.php"  />
								<?php
							}else{
								?>
							     <meta http-equiv="refresh" content="0;url=admin_details_booking.php"  />	
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
