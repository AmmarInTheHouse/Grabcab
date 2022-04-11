<?php
include"constans.php";

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
        <?php include('script1.php'); ?>
        <script type="text/javascript">
            // Photo
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
            <!--BEGIN BACK    TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <?php include('topbar.php'); ?>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <?php
               /* if ($_GET['type'] == 'DSE') {
                    $_SESSION['nav'] = "5";
                } elseif ($_GET['type'] == 'Retailer') {
                    $_SESSION['nav'] = "6";
                } elseif ($_GET['type'] == 'Distributor') {
                    $_SESSION['nav'] = "7";
                } elseif ($_GET['type'] == 'Company') {
                    $_SESSION['nav'] = "8";
                }*/
                ($_GET['type'] == 'DSE'?$_SESSION['nav'] = "4":($_GET['type'] == 'Retailer'?$_SESSION['nav'] = "2":($_GET['type'] == 'Distributor'?$_SESSION['nav'] = "6":$_SESSION['nav'] = "8")));
                include('navbar.php');
                ?>
                <!--END SIDEBAR MENU-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title"><?php echo $_GET[type]; ?></div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li><a href="">ADD <?php echo $_GET[type]; ?></a>&nbsp;&nbsp;</li>

                        </ol>
                        <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i><input type="hidden" name="datestart" /><input type="hidden" name="endstart" /></div>
                        <div class="clearfix"></div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->
                    <div class="page-content">
                        <?php $type = $_GET[type]; ?>
                        <div class="panel panel-orange">
                            <div class="panel-heading">Add <?php echo $type ?>
                                <a href="csv_dse.php?type=<?php echo $type;?>" class="pull-right" style="color: white">Add CSV File</a>
                            </div>
                            <div class="panel-body pan">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-body pal">
                                            <div class=" col-md-6 form-group">

                                                <input id="type" name="type" type="hidden" value="<?php echo $type ?>" class="form-control" >

                                                <label for="Username" class="col-md-3 control-label">Username <span class="require">*</span></label>

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-user"></i>
                                                        <input id="username" name="username" tabindex="1"  type="text" required placeholder="Username" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 form-group">
                                                <label for="password" class="col-md-3 control-label">Password <span class="require">*</span></label>

                                                <div class="col-md-9">
                                                    <div class="input-icon"><i class="fa fa-key"></i>
                                                        <input id="password" name="password" tabindex="2" type="password" required placeholder="Password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                            </div>
                        </div>

                        <?php $type = $_GET[type]; ?>
                        <div class="panel panel-orange">
                            <div class="panel-heading">Add <?php echo $type ?> Details</div>
                            <div class="panel-body pan">
                                <?php
                                $first_name = $_REQUEST['first_name'];
                                $last_name = $_REQUEST['last_name'];
                                $father_name = $_REQUEST['father_name'];
                                $email = $_REQUEST['email'];
                                $address = $_REQUEST['address'];
                                $qualification = $_REQUEST['qualification'];
                                $phone = $_REQUEST['phone'];
                                $photo = "images/uploads/" . $_FILES["photo"]["name"];
                                $photo_id = "images/uploads/" . $_FILES["photoId"]["name"];
                                $shop_name = $_REQUEST['shop_name'];
                                $assigned_route = $_REQUEST['assigned_route'];
                                $comp_name = $_REQUEST['comp_name'];
                                $sap_no = $_REQUEST['sap_no'];
                                $name = $_REQUEST['username'];
                                $password = $_REQUEST['password'];
                                $type = $_REQUEST['type'];
                                $firm_name = $_REQUEST['firm_name'];
                                $contact_person = $_REQUEST['contact_person'];
                                $dob = $_REQUEST['dob'];
                                $pincode = $_REQUEST['pincode'];
                                $dse_route = $_REQUEST['DSE_assigned_route'];
                                ?>

                                <div class="form-body pal">
                                    <?php  {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="first_name">First Name</label>
                                                    <div class="input-icon right"><i class="fa fa-user"></i>
                                                        <input id="first_name" value="<?php echo $first_name; ?>" tabindex="3" name="first_name" type="text"  class="form-control" ></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="last_name">Last Name</label>
                                                    <div class="input-icon right"><i class="fa fa-user"></i>
                                                        <input id="last_name" value="<?php echo $last_name; ?>" tabindex="4" name="last_name"   type="text"  class="form-control" ></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="father_name">Father Name</label>
                                                    <div class="input-icon right"><i class="fa fa-user"></i>
                                                        <input id="father_name" tabindex="5" value="<?php echo $father_name; ?>" name="father_name" type="text"  class="form-control" ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="email">Email</label>
                                                    <div class="input-icon right"><i class="fa fa-envelope"></i>
                                                        <input id="email" tabindex="6" value="<?php echo $email; ?>" name="email"  type="email"  class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="qualification">Qualification</label>
                                                    <div class="input-icon right"><i class="fa fa-envelope"></i>
                                                        <input id="qualification" tabindex="7" value="<?php echo $qualification; ?>" name="qualification"  type="text"  class="form-control" ></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label class="space" for="phone">Phone</label>
                                                    <div class="input-icon right"><i class="fa fa-phone"></i>
                                                        <input id="phone" tabindex="8" value="<?php echo $phone; ?>" name="phone" onkeypress="return onlyNos(event, this)" type="text" required class="form-control" maxlength="10" pattern="^[0-9]{10}"></div>
                                                </div>
                                                </div>
                                                                                   </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6"><label class="space" for="address">Address</label>
                                                <textarea rows="7"  id="address" name="address" tabindex="9" class="form-control"  pattern="^[0-9A-Za-z /,.]"><?php echo $address; ?></textarea>
                                            </div>
                                            <div class="col-md-2"><label class="space" for="photo">Photo
                                                    <div class="form-group">
                                                        <label for="photo" style="cursor:pointer;">
                                                            <img alt="Upload Image" src="images/avatar/avatar.jpg" id="photoImg" name="photoImg" src="#" for="photo" height="150px" width="150px" />
                                                        </label>
                                                        <input onchange="readURL(this);" type="file" id="photo" tabindex="10" name="photo"  style="display: none" />
                                                    </div>
                                            </div>
                                            <div class="col-md-4"><label class="space" for="photoId">Photo
                                                    <div class="">
                                                        <label for="photoId" style="cursor:pointer;">
                                                            <img alt="Upload Image" src="images/avatar/avatar.jpg" id="photoIdImg" name="photoIdImg" src="#" for="photo" height="150px" width="300px" />
                                                        </label>
                                                        <input onchange="photoIdURL(this);" type="file" id="photoId" tabindex="11" name="photoId" style="display: none" />

                                                    </div>
                                            </div>      

                                        </div><?php }
                                    ?>
                                    <?php
                                    if ($type == "Retailer") {
                                        ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="shopname" class="control-label space">Shop Name</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <input id="shopname" name="shop_name" value="<?php echo $shop_name; ?>" tabindex="12" onkeypress="return onlyAlphabets(event, this)" type="text" required class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="assigned_route" class="control-label space">Assigned Route</label>

                                                    <div class="input-icon right">
                                                        <i class="fa fa-location"></i>
                                                        <!--<input id="assigned_route" name="assigned_route" value="<?php echo $assigned_route; ?>" tabindex="13" type="text" required class="form-control" />-->
                                                        <select id="assigned_route" name="assigned_route" value="<?php echo $assigned_route; ?>" tabindex="13" type="text" required class="form-control">
                                                           <?php
                                                             $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
                                                            // $sql11="select us.DSE_assigned_route from user_details us,user u where u.id=us.user_id and u.type='DSE'";
															//$sql11="SELECT r.route FROM user as u,route as r where u.id = r.id and u.type='DSE'";
															$sql11="select customer from traveldesk where id='DSE' ";
                                                             $result11=  mysqli_query($dbc, $sql11);
                                                             while ($row = mysqli_fetch_array($result11)) {?>
                                                             <option value="<?php echo $row["assigned_route"]?>"><?php echo $row["assigned_route"]?></option>
                                                             <?php    
                                                             }
                                                           ?>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="retailer_code" class="control-label space">Retailer Code</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-user"></i>
                                                        <input id="retailer_code" name="retailer_code" tabindex="14" value="<?php echo $retailer_code; ?>" onkeypress="return onlyNos(event, this)" type="text" maxlength="10" required class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_person" class="control-label space">Contact Person</label>

                                                    <div class="input-icon right">
                                                        <i class="fa fa-location"></i>
                                                        <input id="contact_person" name="contact_person" value="<?php echo $contact_person; ?>" tabindex="15" onkeypress="return onlyAlphabets(event, this)" type="text" required class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="/dob" class="control-label space">Date of Birth</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-calendar"></i>
                                                        <input id="dob" name="dob" tabindex="16" value="<?php echo $dob; ?>" type="date"  class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pincode" class="control-label space">Pincode</label>

                                                    <div class="input-icon right">
                                                        <i class="fa fa-location"></i>
                                                        <input id="pincode" name="pincode" tabindex="17" value="<?php echo $pincode; ?>" onkeypress="return onlyNos(event, this)" type="text" maxlength="6"  class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if ($type == "Company") {
                                        ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="shopname" class="control-label space">Company Name</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <input id="comp_name" name="comp_name" value="<?php echo $comp_name; ?>" tabindex="18" type="text" required class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="area" class="control-label space">Sap Number</label>

                                                    <div class="input-icon right">
                                                        <i class="fa fa-location"></i>
                                                        <input id="sap_no" name="sap_no" tabindex="19" value="<?php echo $sap_no; ?>" type="text" onkeypress="return onlyNos(event, this)" required class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
    <?php
}
?>
                                </div>
                            
                                <div class="form-actions text-right pal">
                                    <input type="submit" tabindex="20" id="submit" name="submit" value="Send request" class="btn btn-success" />
                                </div>
                                </form>
<?php
if (isset($_POST["submit"])) {
    $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $phone = $_POST['phone'];
    $photo = "images/uploads/" . $_FILES["photo"]["name"];
    $photo_id = "images/uploads/" . $_FILES["photoId"]["name"];
    $shop_name = $_POST['shop_name'];
    $assigned_route = $_POST['assigned_route'];
    $comp_name = $_POST['comp_name'];
    $sap_no = $_POST['sap_no'];
    $name = $_POST[username];
    $password = $_POST[password];
    $type = $_POST[type];
    $retailer_code = $_POST['retailer_code'];
    $contact_person = $_POST['contact_person'];
    $dob = $_POST['dob'];
    $pincode = $_POST['pincode'];
    $route=$_POST['dse_route'];
	
	         
    if (mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM user_details WHERE  email='$email'")) > 0) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $father_name = $_POST['father_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $qualification = $_POST['qualification'];
        $phone = $_POST['phone'];
        $photo = "images/uploads/" . $_FILES["photo"]["name"];
        $photo_id = "images/uploads/" . $_FILES["photoId"]["name"];
        $shop_name = $_POST['shop_name'];
        $assigned_route = $_POST['assigned_route'];
        $comp_name = $_POST['comp_name'];
        $sap_no = $_POST['sap_no'];
        $name = $_SESSION[username];
        $password = $_SESSION[password];
        $type = $_SESSION[type];
        $firm_name = $_POST['firm_name'];
        $contact_person = $_POST['contact_person'];
        $dob = $_POST['dob'];
        $pincode = $_POST['pincode'];
        ?>
                                        <script src="js/notie.js"></script>
                                        <script src="js/toaster.js"></script>
                                        <script type="text/javascript">
                                                            var result = "Email Already exsist "
                                                            error(result);
                                        </script>

        <?php
    } else {

        if ($type == "DSE") {
            
                $sqluser = "INSERT INTO user (username,password,type) values('$name','$password','$type')";
            mysqli_query($dbc, $sqluser);
            $id = mysqli_insert_id($dbc);
            $sql = "INSERT INTO user_details(user_id,first_name,last_name,father_name,email,address,qualification,phone,photo,photo_id)values
                                    ('$id','$first_name','$last_name','$father_name' ,'$email','$address','$qualification','$phone','$photo','$photo_id')";
            mysqli_query($dbc, $sql); 
            ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                                                        var result = "insert successfully"
                                                                        success(result);

                                            </script>
                                            <meta http-equiv="refresh" content="0;url=dse_list.php" />
            <?php
                
            
              
                 
            
            
        }

        if ($type == "Distributor") {
            $sqluser = "INSERT INTO user (username,password,type) values('$name','$password','$type')";
            mysqli_query($dbc, $sqluser);
            $id = mysqli_insert_id($dbc);
            $sql = "insert into user_details(user_id,first_name,last_name,father_name,email,address,qualification,phone,photo,photo_id)values
                                    ('$id','$first_name','$last_name','$father_name' ,'$email','$address','$qualification','$phone','$photo','$photo_id')";
            mysqli_query($dbc, $sql);
            ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                                                        var result = "insert successfully"
                                                                        success(result);

                                            </script>
                                            <meta http-equiv="refresh" content="0;url=distributor_list.php" />
            <?php
        }

        if ($type == "Retailer") {
			
            $sqluser = "INSERT INTO user (username,password,type) values('$name','$password','$type')";
            //mysqli_query($dbc, $sqluser);
            $id = mysqli_insert_id($dbc);
            $sql = "insert into user_details(user_id,first_name,last_name,father_name,email,address,qualification,phone,photo,photo_id)values
                                    ('$id','$first_name','$last_name','$father_name' ,'$email','$address','$qualification','$phone','$photo','$photo_id')";
            //mysqli_query($dbc, $sql);
            $sqlRetailer = "insert into retailer(user_id,shop_name,assigned_route,retailer_code,contact_person,dob,pincode)values
                                    ('$id','$shop_name','$assigned_route','$retailer_code','$contact_person','$dob','$pincode')";
            //mysqli_query($dbc, $sqlRetailer);
			
			$sql2="select u.user_id,n.assigned_route from demo_number n,user_demo u where n.assigned_route='$assigned_route' and n.id=u.demo_id and n.type='DSE'";
			$result2 = mysqli_query($dbc, $sql2);
			while ($row = mysqli_fetch_array($result2)) {
												$user_id=$row["user_id"];
												$assigned_route1=$row["assigned_route"];
												if($assigned_route==$assigned_route1)
												{
													$sql3="insert into donor_receiver(donor_demo,receiver_demo) values('$id','$user_id')";
													echo $sql3;
												}
													
												}
     			    
                                                   
												   
            ?>
                                            <script src="js/notie.js"></script>
                                            <script src="js/toaster.js"></script>
                                            <script type="text/javascript">
                                                                        var result = "insert successfully"
                                                                        success(result);

                                            </script>
                                           <!-- <meta http-equiv="refresh" content="0;url=retailer_list.php" />-->
            <?php
        }

        if ($type == "Company") {

            if (mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM company WHERE sap_code = '$sap_no' ")) > 0) {
                ?>
                                                <script src="js/notie.js"></script>
                                                <script src="js/toaster.js"></script>
                                                <script type="text/javascript">
                                                                    var result = "Sap Code Already exsist "
                                                                    error(result);
                                                </script>
                                                <?php
                                            } else {
                                                $sqluser = "INSERT INTO user (username,password,type) values('$name','$password','$type')";
                                                mysqli_query($dbc, $sqluser);
                                                $id = mysqli_insert_id($dbc);
                                                /* $sql="insert into user_details(user_id,first_name,last_name,father_name,email,address,qualification,phone,photo,photo_id)values
                                                  ('$id','$first_name','$last_name','$father_name' ,'$email','$address','$qualification','$phone','$photo','$photo_id')";
                                                  mysqli_query($dbc,$sql); */
                                                $sqlCompany = "insert into company(user_id,name,sap_code)values
                                    ('$id','$comp_name','$sap_no')";
                                                mysqli_query($dbc, $sqlCompany);
                                                ?>
                                                <script src="js/notie.js"></script>
                                                <script src="js/toaster.js"></script>
                                                <script type="text/javascript">
                                                                            var result = "insert successfully"
                                                                            success(result);

                                                </script>
                                                <meta http-equiv="refresh" content="0;url=companylist.php" />
                <?php
            }
        }
// FOR photo
        $target_dir = "images/uploads/";
        $date=date('m-d-Y_hia');
		$target_file = $target_dir .$date. basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        

        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        
        
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }

// FOR photoId
        $target_dir = "images/uploads/";
        $date=date('m-d-Y_hia');
		$target_file = $target_dir .$date. basename($_FILES["photoId"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        

        $check = getimagesize($_FILES["photoId"]["tmp_name"]);
        
        
            if (move_uploaded_file($_FILES["photoId"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["photoId"]["name"]) . " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        

        if ($type == "Retailer") {
            ?>

                                            <?php
                                        } elseif ($type == "DSE") {
                                            ?>

                                            <?php
                                        } elseif ($type == "Company") {
                                            ?>

                                            <?php
                                        } elseif ($type == "Distributor") {
                                            ?>

                                            <?php
                                        }
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



<script type="text/javascript">
    $("#file").change(function () {
        $("#import").show();
    });

</script>
