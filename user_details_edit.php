<?php 
require"session_all.php";
if($_GET[type]=="DSE")
{
$_SESSION['nav']="5";
}elseif($_GET[type]=="Retailer"){
	$_SESSION['nav']="3";
}elseif($_GET[type]=="company"){
	$_SESSION['nav']="9";
}elseif($_GET[type]=="Distributor"){
	$_SESSION['nav']="7";
}
include "constans.php";
$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Blank | Extras</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <?php include('script1.php');?>
    <script type="text/javascript">
        //Photo
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#photoImg').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        //Photo id
        function photoIdURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#photoIdImg').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
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
        <?php include('topbar.php');?>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <?php include('navbar.php');?>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Update <?php echo $_GET['type'];?> </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li></i>&nbsp;<a href="">LIST</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="<?php echo $_GET['type'];?>_list.php"><?php echo $_GET['type'];?>&nbsp;LIST</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Update <?php echo $_GET['type'];?></li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i><input type="hidden" name="datestart" /><input type="hidden" name="endstart" /></div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
				<?php $type = $_GET[type]; ?>
					<div class="panel panel-orange">
                            <div class="panel-heading">Update <?php echo $type ?>
                                
                            </div>
                            <div class="panel-body pan">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-body pal">
                                            <div class=" col-md-6 form-group">
											

                                                <input id="type" name="type" type="hidden" value="<?php echo $_GET['type']; ?>" class="form-control" >
												  <input type="hidden" id="user_id" name="user_id" value="<?php  echo $_REQUEST['user_id'];?>" class="form-control" />
											<?php
											$user_id=$_REQUEST[user_id];
                                            $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                                            $sql="SELECT u.username,u.password FROM user u,user_details ud where u.id=ud.user_id and ud.user_id='$user_id'";
                                            $resultu = mysqli_query($dbc, $sql);
                                            $row=mysqli_fetch_array($resultu);
                                            ?>
                                                <label for="Username" class="col-md-3 control-label">Username </label>

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="username" name="username" tabindex="19"  type="text" required placeholder="Username" class="form-control"  required type="text" value="<?php echo $row[username];?>"  / >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 form-group">
                                                <label for="password" class="col-md-3 control-label">Password </label>

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-key"></i>
                                                        <input id="password" name="password" tabindex="20" type="password" required placeholder="Password" value="<?php echo $row[password];?>"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                            </div>
                        </div>



                    <div class="panel panel-orange">
                        <div class="panel-heading">Insert Addition detail for <?php  echo $_GET['type'];?></div>
                        <div class="panel-body pan">
                            <form  method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-body pal">
                                    <input type="hidden" id="type" name="type" value="<?php  echo $_REQUEST['type'];?>" class="form-control"/>
                                    <input type="hidden" id="user_id" name="user_id" value="<?php  echo $_REQUEST['user_id'];?>" class="form-control" />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <?php
											$user_id=$_REQUEST[user_id];
                                            $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                                            $sql="SELECT * FROM user_details where user_id='$user_id'";
                                            $result = mysqli_query($dbc, $sql);
                                            $row=mysqli_fetch_array($result);
                                            ?>
                                                <label for="first_name" class="control-label">First Name</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="first_name" name="first_name" tabindex="1" onkeypress="return onlyAlphabets(event,this)" required type="text" value="<?php echo $row[first_name];?>" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="last_name" class="control-label">Last Name</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="last_name" name="last_name" tabindex="2" onkeypress="return onlyAlphabets(event,this)" required value="<?php echo $row[last_name];?>" type="text" class="form-control" pattern="^[a-zA-Z]+$"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="father_name" class="control-label">Father's Name</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="father_name" name="father_name" tabindex="3" onkeypress="return onlyAlphabets(event,this)" value="<?php echo $row[father_name];?>" type="text" class="form-control" pattern="^[a-zA-Z]+$" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email" class="control-label">Email</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    <input id="email" name="email" type="email" tabindex="4" required value="<?php echo $row[email];?>" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="qualification" class="control-label">Qualification</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input id="qualification" name="qualification" tabindex="5" required type="text" value="<?php echo $row[qualification];?>" class="form-control" pattern="^[a-zA-Z0-9.]+$" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Phone No.</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-phone"></i>
                                                    <input id="phone" name="phone" type="text" tabindex="6" onkeypress="return onlyNos(event,this)" required value="<?php echo $row[phone];?>" maxlength="10" class="form-control" pattern="^[0-9]{10}" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="address" class="control-label">Address</label><textarea rows="7" id="address" tabindex="7" required name="address" value="" class="form-control" pattern="^[a-zA-Z.,/- ]+$"><?php echo $row[address];?></textarea>

                                        </div>


                                        <div class="col-md-2">
                                            <label for="photo">Photo</label><br>
                                            <label for="photo">
                                            <img alt="Upload Image" src="images/avatar/avatar.jpg" onerror="this.src='images/avatar/avatar.jpg'" id="photoImg" name="photoImg" src="#" for="photo" height="150px" width="150px" /></label>
                                                
                                            <input onchange="readURL(this);" type="file" tabindex="8" id="photo" name="photo" style="display: none" />



                                        </div>
                                        <div class="col-md-2">
                                            <label for="photoId">Photo Id</label><br>

                                            <label for="photoId">
                                            <img alt="Upload Image" src="<?php echo $row[photo_id] ?>" onerror="this.src='images/avatar/avatar.jpg'"  id="photoIdImg" name="photoIdImg" src="#" for="photo" height="150px" width="300px" /></label>
                                                
                                            <input onchange="photoIdURL(this);" type="file" tabindex="9" id="photoId" name="photoId" style="display: none" />
                                        </div>
                                    </div>
                                    <?php
                                    if($_GET[type]=="company")
                                    {
                                        $user_id=$_REQUEST[user_id];
                                        $sql1="SELECT * from company where user_id='$user_id'";
                                         $result1 = mysqli_query($dbc, $sql1);
                                            $row1=mysqli_fetch_array($result1);

                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_name" class="control-label">Company Name</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <input id="company_name" name="company_name" type="text" tabindex="10" required class="form-control" value="<?php echo $row1[name];?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sap_code" class="control-label">Sap Code</label>

                                                <div class="input-icon right">
                                                    <input id="sap_code" name="sap_code" type="text" tabindex="11" required onkeypress="return onlyNos(event,this)" class="form-control" value="<?php echo $row1[sap_code];?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <?php
                                    if($_GET[type]=="Retailer")
                                    {
                                        $user_id=$_REQUEST[user_id];
                                         $sql2="SELECT * from retailer where user_id='$user_id'";
                                         $result2 = mysqli_query($dbc, $sql2);
                                            $row2=mysqli_fetch_array($result2);

                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="shopname" class="control-label">Shop Name</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <input id="shop_name" name="shop_name" type="text" tabindex="12" required onkeypress="return onlyAlphabets(event,this)"  class="form-control" value="<?php echo $row2[shop_name];?>"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div   class="form-group">
                                                <label for="assigned_route" class="control-label">Assigned Route</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-road"></i>
                                                    <input id="assigned_route" name="assigned_route" type="text" tabindex="13" required  class="form-control" value="<?php echo $row2[assigned_route];?>"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="retailer_code" class="control-label">Retailer Code</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <input id="firm_name" name="retailer_code" type="text" tabindex="14" required onkeypress="return onlyNos(event,this)"  class="form-control" value="<?php echo $row2[retailer_code];?>"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="contact_person" class="control-label">Contact Person</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="contact_person" name="contact_person" type="text" tabindex="15" required onkeypress="return onlyAlphabets(event,this)" class="form-control" value="<?php echo $row2[contact_person];?>"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div   class="form-group">
                                                <label for="dob" class="control-label">Date of Birth</label>

                                                <div class="input-icon right">
                                                    <i class="fa fa-calendar"></i>
                                                    <input id="dob" name="dob" type="date" tabindex="16" required max="<?php echo date('Y-m-d')?>" class="form-control" value="<?php echo $row2[dob];?>"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pincode" class="control-label">Pincode</label>
                                                <div class="input-icon right">
                                                
                                                    <input id="pincode" name="pincode" type="text" tabindex="17" maxlength="6" required onkeypress="return onlyNos(event,this)" class="form-control" value="<?php echo $row2[pincode];?>"  />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="up_percent" class="control-label">up_percent</label>
                                                <div class="input-icon right">
                                                
                                                    <input id="up_percent" name="up_percent" type="text" tabindex="17" maxlength="6" required onkeypress="return onlyNos(event,this)" class="form-control" value="<?php echo $row2[up_percent];?>"  />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="down_percent" class="control-label">down_percent</label>
                                                <div class="input-icon right">
                                                
                                                    <input id="down_percent" name="down_percent" type="text" tabindex="17" maxlength="6" required onkeypress="return onlyNos(event,this)" class="form-control" value="<?php echo $row2[down_percent];?>"  />
                                                </div>
                                            </div>
                                        </div>
											<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="down_percent" class="control-label">Transaction Type</label>
                                                <div class="input-icon right">
                                                
                                                    <!--<input id="down_percent" name="down_percent" type="text" tabindex="17" maxlength="6" required onkeypress="return onlyNos(event,this)" class="form-control" value="<?php echo $row2[down_percent];?>"  />-->
                                                 <select name="type" class="form-control" value="<?php echo $transaction_type ?>" >

											<?php
                                                       echo $sql1 = "select * from transaction_type where isdelete='0' and transaction_type !='opening' ";
                                                        $result1 = mysqli_query($dbc, $sql1);
                                                        while ($row1 = mysqli_fetch_array($result1)) {
                                                           
                                                                ?>
                                                                <option value="<?php echo $row1[id] ?>" <?php if($row1[transaction_type] == $transaction_type){echo "selected";}?>><?php echo $row1[transaction_type] ?></option>
                                                            
                                                              
                                                            <?php
                                                        }
                                                        ?>
                                       </select>
												
												</div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                
                                <?php
                                }
                                ?>

                                <div class="form-actions text-right pal">
                                    
                                    <input type="submit" name="submit" value="Update" class="btn btn-success"/>

                                </div>

                            </form>
                            </div>
                            <?php
                            if(isset($_REQUEST["submit"])) {
                                $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');

                                $user_id=$_POST['user_id'];
                                $first_name=$_POST['first_name'];
                                $last_name=$_POST['last_name'];
                                $father_name=$_POST['father_name']; 
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                               
                                $email =$_POST['email'];
                                $address =$_POST['address'];
                                $qualification =$_POST['qualification'];    
                                $phone =$_POST['phone'];    
                                $photo ="images/uploads/".$_FILES["photo"]["name"];
                                $photo_id ="images/uploads/".$_FILES["photoId"]["name"];    
                                $shop_name =$_POST['shop_name'];
                                $company_name=$_POST['company_name'];
                                $sap_code=$_POST['sap_code'];
                                $assigned_route=$_POST['assigned_route'];
                                $firm_name=$_POST['firm_name'];
                                $contact_person=$_POST['contact_person'];
                                $dob=$_POST['dob'];
                                $pincode=$_POST['pincode'];
								$up_percent=$_POST['up_percent'];
                                $down_percent=$_POST['down_percent'];
								$transaction_type=$_POST['transaction_type'];



                                if ($_POST['type'] == "DSE")
                                {
                                    $resultdse=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
									$rowdse=mysqli_num_rows($resultdse);
									
									echo $rowdse;
                           
								   if($rowdse < 1)
									{
									    echo $sqldse="UPDATE user_details ud,user u  SET u.username='$username',u.password='$password' ,ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                                       
									   mysqli_query($dbc,$sqldse);?>
									   <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Update Successfully"
                                            error(result);
                                            </script>
									   <meta http-equiv="refresh" content="0;url=dse_list.php" /><?php
										
									}
									else
									{ 

										?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
										<?php
									
									}
                                }
                                if ($_POST['type'] == "Retailer")
                                {
									$resultretailer=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
									$rowretailer=mysqli_num_rows($resultretailer);
                           
								   if($rowretailer < 1)
									{
                                        $sqlretailer="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password', ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
							 
										mysqli_query($dbc,$sqlretailer);

                                         $sqlretailer1="UPDATE  retailer SET user_id='$user_id',shop_name='$shop_name',assigned_route='$assigned_route',retailer_code='$firm_name',contact_person='$contact_person',dob='$dob',pincode='$pincode',up_percent='$up_percent',down_percent='$down_percent',transaction_type='$transaction_type' WHERE  user_id='$user_id'";
									
                                        mysqli_query($dbc,$sqlretailer1);   
                                        ?>
										
                                                                           
											<script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Update Successfully"
                                            error(result);
                                            </script>
										
									<meta http-equiv="refresh" content="0;url=retailer_list.php" /><?php
										
									}
									else
									{ 
                                                                            ?>
											<script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
										<?php
										
									}
								}  
                                if ($_POST['type'] =="company")
                                {
									
                                    $resultcompany=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
									$rowcompany=mysqli_num_rows($resultcompany);
                           
								   if($rowcompany < 1)
									{
                                                                                
                                                                              if(mysqli_num_rows(mysqli_query($dbc,"select * from company where sap_code='$sap_code' and user_id!=$user_id")) > 0 ){
											?>
											<script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "SAP number Already exist"
                                            error(result);
                                            </script>
											<?php
										}
										else{
											$sqlcompany="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
							 
										mysqli_query($dbc,$sqlcompany); 
										
										$sqlcompany="UPDATE  company SET user_id='$user_id',name='$company_name',sap_code='$sap_code' WHERE user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlcompany); ?>
										<meta http-equiv="refresh" content="0;url=companylist.php" /><?php
										}   
									}
									else
									{ 
									?>
											<script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
										<?php	
										
									}
								}
                                if ($_POST['type'] == "Distributor")
                                {
                                    $resultdistributor=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowdistributor=mysqli_num_rows($resultdistributor);
                           
                                   if($rowdistributor < 1)
                                    {
                                       $sqldistributor="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqldistributor);?>
                                    <meta http-equiv="refresh" content="0;url=distributor_list.php" /><?php
                                        
                                    }
                                    else
                                    { 

                                      ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php  
                                    }
                                }  
                                
								if(strlen($_FILES["photo"]["name"])>0){
                                
								$target_dir = "images/uploads/";
								 $date=date('m-d-Y_hia');
                                $target_file = $target_dir .$date. basename($_FILES["photo"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                                               
                               $check = getimagesize($_FILES["photo"]["tmp_name"]);
							   
							     if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                                        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }

                                if ($_POST['type'] == "DSE")
                                {
                                    $resultdse=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowdse=mysqli_num_rows($resultdse);
                           
                                   if($rowdse<1)
                                    {
                                        $sqldse="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqldse);?>
                                       <meta http-equiv="refresh" content="0;url=dse_list.php" /><?php
                                       
                                    }
                                    else
                                    { 

                                         ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                    
                                    }
                                }
                                if ($_POST['type'] == "Retailer")
                                {
                                    $resultretailer=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowretailer=mysqli_num_rows($resultretailer);
                           
                                   if($rowretailer<1)
                                    {
                                       $sqlretailer="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlretailer);

                                         $sqlretailer1="UPDATE  retailer SET user_id='$user_id',shop_name='$shop_name',assigned_route='$assigned_route',firm_name='$firm_name',contact_person='$contact_person',dob='$dob',pincode='$pincode' WHERE user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlretailer1);   
                                        ?>
                                    <meta http-equiv="refresh" content="0;url=retailer_list.php" /><?php
                                        
                                    }
                                    else
                                    { 
                                        ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                    }
                                }  
                                if ($_POST['type'] =="company")
                                {
                                    ?>
                                    <?php
                                    $resultcompany=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowcompany=mysqli_num_rows($resultcompany);
                           
                                   if($rowcompany<1)
                                    {
                                       if(mysqli_num_rows(mysqli_query($dbc,"select * from company where sap_code='$sap_code' and user_id!=$user_id")) > 0 ){
                                            ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "SAP number Already exist"
                                            error(result);
                                            </script>
                                            <?php
                                        }
                                        else{
                                            $sqlcompany="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlcompany); 
                                        
                                        $sqlcompany="UPDATE  company SET user_id='$user_id',name='$company_name',sap_code='$sap_code' WHERE user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlcompany); ?>
                                        <meta http-equiv="refresh" content="0;url=companylist.php" /><?php
                                        }
                                        
                                    }
                                    else
                                    { 
                                       ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php 
                                        
                                    }
                                }
                                if ($_POST['type'] == "Distributor")
                                {
                                    $resultdistributor=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowdistributor=mysqli_num_rows($resultdistributor);
                           
                                   if($rowdistributor<1)
                                    {
                                       $sqldistributor="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqldistributor);?>
                                    <meta http-equiv="refresh" content="0;url=distributor_list.php" /><?php
                                       
                                    }
                                    else
                                    { 

                                         ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                    }
                                }
                            }

                                //photo Id
                                if(strlen($_FILES["photoId"]["name"])>0)
                                {
                                
									 $target_dir = "images/uploads/";
								 $date=date('m-d-Y_hia');
                                $target_file = $target_dir .$date. basename($_FILES["photoId"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                                               
                               $check = getimagesize($_FILES["photoId"]["tmp_name"]);
							   
							     if (move_uploaded_file($_FILES["photoId"]["tmp_name"], $target_file)) {
                                        echo "The file ". basename( $_FILES["photoId"]["name"]). " has been uploaded.";
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }
									
                                if ($_POST['type'] == "DSE")
                                {
                                    $resultdse=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowdse=mysqli_num_rows($resultdse);
                           
                                   if($rowdse<1)
                                    {
                                       $sqldse="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqldse);?>
                                       <meta http-equiv="refresh" content="0;url=dse_list.php" /><?php
                                       
                                    }
                                    else
                                    { 
                                         ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                        
                                    
                                    }
                                }
                                if ($_POST['type'] == "Retailer")
                                {
                                    $resultretailer=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowretailer=mysqli_num_rows($resultretailer);
                           
                                   if($rowretailer<1)
                                    {
                                        $sqlretailer="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlretailer);

                                         $sqlretailer1="UPDATE  retailer SET user_id='$user_id',shop_name='$shop_name',assigned_route='$assigned_route',firm_name='$firm_name',contact_person='$contact_person',dob='$dob',pincode='$pincode' WHERE user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlretailer1);   
                                        ?>
                                    <meta http-equiv="refresh" content="0;url=retailer_list.php" /><?php
                                        
                                    }
                                    else
                                    { 
                                        ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                       
                                    }
                                }  
                                if ($_POST['type'] =="company")
                                {
                                    ?>
                                    <?php
                                    $resultcompany=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowcompany=mysqli_num_rows($resultcompany);
                           
                                   if($rowcompany<1)
                                    {
                                       if(mysqli_num_rows(mysqli_query($dbc,"select * from company where sap_code='$sap_code' and user_id!=$user_id")) > 0 ){
                                            ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "SAP number Already exist"
                                            error(result);
                                            </script>
                                            <?php
                                        }
                                        else{
                                            $sqlcompany="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlcompany); 
                                        
                                        $sqlcompany="UPDATE  company SET user_id='$user_id',name='$company_name',sap_code='$sap_code' WHERE user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqlcompany); ?>
                                        <meta http-equiv="refresh" content="0;url=companylist.php" /><?php
                                        }
                                        
                                    }
                                    else
                                    { 
                                        ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                        
                                    }
                                }
                                if ($_POST['type'] == "Distributor")
                                {
                                    $resultdistributor=mysqli_query($dbc,"select * from user_details where email='$email' and user_id!='$user_id'");
                                    $rowdistributor=mysqli_num_rows($resultdistributor);
                           
                                   if($rowdistributor<1)
                                    {
                                        $sqldistributor="UPDATE  user_details ud,user u SET u.username='$username',u.password='$password',ud.first_name='$first_name',ud.last_name='$last_name',ud.father_name='$father_name',ud.email='$email',ud.address='$address',ud.qualification='$qualification',ud.phone='$phone',ud.photo='$photo' WHERE u.id=ud.user_id and ud.user_id='$user_id'";
                             
                                        mysqli_query($dbc,$sqldistributor);?>
                                    <meta http-equiv="refresh" content="0;url=distributor_list.php" /><?php
                                       
                                    }
                                    else
                                    { 
                                         ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                            var result = "Email Already exist"
                                            error(result);
                                            </script>
                                        <?php
                                       
                                    }
                                }


                            }
                            ?>
                            
                           
                            <?php
                                if ($_POST['type'] =="Retailer")
                                {
                            ?>
                            <!--<meta http-equiv="refresh" content="0;url=retailer_list.php" />-->
                            <?php
                                }elseif ($_POST[type]=="Company") {
                                ?>
								<!--<meta http-equiv="refresh" content="0;url=companylist.php" />-->
                                <?php
                                }elseif ($_GET[type]=="DSE") {
                                ?>
                                <!--<meta http-equiv="refresh" content="0;url=dse_list.php" />-->
                                <?php
                                }elseif ($_GET[type]=="Distributor") {
                                ?>
                                <!--<meta http-equiv="refresh" content="0;url=distributor_list.php" />-->
                                <?php
                                }
                                
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <!--END CONTENT-->

                <!--BEGIN CONTENT QUICK SIDEBAR-->
                <?php include('rightsidebar.php');?>
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
    <?php include('script2.php');?>
</body>
</html>
