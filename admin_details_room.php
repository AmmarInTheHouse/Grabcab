<?php
session_start();
include "constans.php";

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
        <link type="text/css" rel="stylesheet" href="vendors/DataTables/media/css/jquery.dataTables.css">
        <link type="text/css" rel="stylesheet" href="vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css">
        <link type="text/css" rel="stylesheet" href="vendors/DataTables/media/css/dataTables.bootstrap.css">

        <!--DataTable Style Sheet-->


        <style>
            div.DTTT_container {
                display: none;
                position: relative;
                float: right;
                margin-bottom: 1em;
            }

            @media screen and (max-width: 640px) {
                div.DTTT_container {
                    display: none;
                    float: none !important;
                    text-align: center;
                }

                div.DTTT_container:after {
                    visibility: hidden;
                    display: block;
                    content: "";
                    clear: both;
                    height: 0;
                }


            }
        </style>
        <?php include('script1.php'); ?>
    </head>
    <body class=" ">
        <?php
        $id = $_GET['u_id'];
        if (isset($id)) {
            $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQl server.');
            $sql = " DELETE FROM room WHERE id='$_GET[u_id]' ";
            mysqli_query($dbc, $sql);
            ?>
            <script src="js/notie.js"></script>
            <script src="js/toaster.js"></script>
            <script type="text/javascript">
                var result = "Delete successfully"
                success(result);
            </script>
            <meta http-equiv="refresh" content="0;url=admin_details_room.php">
            <?php
        }
        ?>
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <?php include('topbar.php'); ?>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <?php 
                $_SESSION['nav']= "34";
                include('navbar.php'); 
                ?>
                <!--END SIDEBAR MENU-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title">Admin</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <!--<li><a href="#">LIST</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>-->
                            <li class="active">Admin</li>
                        </ol>
                        <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i><input type="hidden" name="datestart" /><input type="hidden" name="endstart" /></div>
                        <div class="clearfix"></div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->
                    <div class="page-content">


                        <div class="panel panel-orange">

                            <div class="panel-heading">
                                Room Details

                                <a class="pull-right" href="admin.php" style="color:white">+Add Admin</a>
                            </div>
                            <div class="panel-body pan">

                                <div class="col-lg-12">
                                    <div class="portlet box">
                                        <div class="portlet-body">
                                            <div class="row mbm">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table id="table_id" style="border-left:0px solid #ddd;border-left:0px solid #ddd;border-bottom:0px solid #ddd"  class="table table-bordered table-hover dataTable no-footer  table-striped  displays">
                                                            <thead >
                                                                <tr>
                                                                    <th class="numeric" width="5%" style="text-align:center;">ID</th>
                                                                    <th class="numeric" width="10%" style="text-align:center;">Room Number</th>  
                                                                    <th class="numeric" width="10%" style="text-align:center;">Action</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody >

                                                                <?php
                                                                $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');

                                                                $sql = "select * from room ";
                                                                $result = mysqli_query($dbc, $sql);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    $id = $row["id"];
                                                                    $roomno = $row["room_number"];
                                                                    
                                                                    
                                                                    
                                                                    ?>
                                                                    <tr >
                                                                        <td style="text-align:center;"><?php echo $id ?></td>
                                                                        <td style="text-align:center;"><?php echo $roomno ?></td>
                                                                        
                                                                        <td style="text-align:center;">

                                                                        <a href="user_update_room.php?id=<?php echo "$id"; ?>"><i class="fa fa-edit" style="color:blue;"></i></a>
                                                                     <a href="admin_details_room.php?u_id=<?php echo "$id"; ?>"><i class="fa fa-trash-o" style="color:red;"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



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
<!--DataTable-->
<script src="vendors/DataTables/media/js/jquery.dataTables.js"></script>
<script src="vendors/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="js/table-datatables.js"></script>
</body>
</html>
