<?php session_start(); ?>
<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <?php
                
                //include "constans.php";
                include "session_all.php";
                $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('Sorry We\'re experiencing connection problem');
                $username = $_SESSION['user'];
                $sql = "SELECT * FROM user JOIN user_details ON user.id=user_details.user_id WHERE user.username='" . $username . "'";
                $result = mysqli_query($dbc, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="thumb">
                    <img src="images/project_images/1.jpg" onerror="this.src='images/avatar/avatar.jpg'" alt="" class="img-circle" />
                </div>
                <div class="info">
                    <p>
                        <?php echo $username; ?>
                    </p>
                    <ul class="list-inline list-unstyled">
                        <li>
                            <a href="logout.php" data-hover="tooltip" title="Logout">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </li>
			
			<?php 
			if($_SESSION['choosenav'] == '0')
			{  

		      ?>
				<li class="<?php
                       ($_SESSION['nav'] == '1') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="dashboard.php">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
			  <li class="<?php
                       ($_SESSION['nav'] == '16' || $_SESSION['nav'] == '17' || $_SESSION['nav'] == '18' || $_SESSION['nav'] == '37')? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Transaction</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '16') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="company_to_distributor_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Company to Distributor </span>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '17') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="distributer_to_dse_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Distributor to DSE </span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '18') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="dse_to_retailer_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">DSE to Retailer</span>
                        </a>
                    </li>
                </ul>
				 
				
				<ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == "37") ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="distributor_to_retailer_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Distributer to Retailer</span>
                        </a>
                    </li>
                </ul>
            </li>
			
			<li class="<?php
            ($_SESSION['nav'] == '29' || $_SESSION['nav'] == '30') ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Coupon</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='33'){ echo "active"; } */($_SESSION['nav'] == '29') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="add_coupon.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Coupon</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='34'){ echo "active"; } */($_SESSION['nav'] == '30') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="coupon.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Coupon</span>
                        </a>
                    </li>
                </ul>
            </li>
		<?php	}else{ ?>
				
			

            <li class="<?php
                       ($_SESSION['nav'] == '1') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="dashboard.php">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '36') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="device_login.php">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Device Login</span>
                </a>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '2' || $_SESSION['nav'] == '3') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Retailer</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '2') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_details.php?type=Retailer">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Retailer</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '3') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="retailer_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Retailer</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '4' || $_SESSION['nav'] == '5') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">DSE</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '4') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_details.php?type=DSE">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add DSE</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '5') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="dse_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List DSE</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '6' || $_SESSION['nav'] == '7') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Distributor</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '6') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_details.php?type=Distributor">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Distributor</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '7') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="distributor_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Distributor</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '8' || $_SESSION['nav'] == '9') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Company</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '8') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_details.php?type=Company">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Company</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '9') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="company_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Company</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '10' || $_SESSION['nav'] == '11') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Demo Number</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '10') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="demo_add.php?type=Demo">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Demo Number</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '11') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="demolist.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Demo Number</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '12' || $_SESSION['nav'] == '13') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Route</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '12') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="add_route.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Route</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '13') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="route_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Route</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '14' || $_SESSION['nav'] == '15') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Transaction Type</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '14') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="add_transaction.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Transaction Type</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '15') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="transaction_type_list.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Transaction Type</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php
                       ($_SESSION['nav'] == '16' || $_SESSION['nav'] == '17' || $_SESSION['nav'] == '18' || $_SESSION['nav'] == '37')? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Transaction</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '16') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="company_to_distributor_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Company to Distributor </span>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '17') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="distributer_to_dse_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Distributor to DSE </span>
                        </a>
                    </li>
                </ul>
                
				 
				
				<ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == "37") ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="distributor_to_retailer_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Distributer to Retailer</span>
                        </a>
                    </li>
                </ul>
				<ul class="nav nav-second-level">
                    <li class="<?php
                               ($_SESSION['nav'] == '18') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="dse_to_retailer_trans.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">DSE to Retailer</span>
                        </a>
                    </li>
                </ul>
            </li>



            
            <li class="<?php
                       ($_SESSION['nav'] == '20' || $_SESSION['nav'] == '21' || $_SESSION['nav'] == '22' || $_SESSION['nav'] == '23' ) ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-laptop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">List Transactions</span>
                    <span class="fa arrow"></span>
                </a>
				<ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='14'){ echo "active"; } */($_SESSION['nav'] == '23') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="transaction_company.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Company to Distributor List</span>
                        </a>
                    </li>
                </ul>
				<ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='14'){ echo "active"; } */($_SESSION['nav'] == '22') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="transaction_distributor.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Distributor to Dse List </span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='14'){ echo "active"; } */($_SESSION['nav'] == '20') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="transaction_dse.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">DSE to Retailer List</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='14'){ echo "active"; } */($_SESSION['nav'] == '21') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="transaction_retailer.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Retailer List</span>
                        </a>
                    </li>
                </ul>
                
                



            </li>
            <li class="<?php
                       /* if($_SESSION['nav']=='15' || $_SESSION['nav']=='16' || $_SESSION['nav']=='17' || $_SESSION['nav']=='18' || $_SESSION['nav']=='19'){echo "active"; } */($_SESSION['nav'] == '24' || $_SESSION['nav'] == '25' || $_SESSION['nav'] == '26' || $_SESSION['nav'] == '27' || $_SESSION['nav'] == '28') ? $store = "active" : $store = "";
                       echo $store;
                       ?>">
                <a href="#">
                    <i class="fa fa-laptop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Assign</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='15'){ echo "active"; } */($_SESSION['nav'] == '24') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_demo.php?type=DSE">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Demo to DSE</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='16'){ echo "active"; } */($_SESSION['nav'] == '25') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="donortoreceiver.php?type=Retailer&type1=DSE">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">DSE to Retailer</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                               /* if($_SESSION['nav']=='17'){ echo "active"; } */($_SESSION['nav'] == '26') ? $store = "active" : $store = "";
                               echo $store;
                               ?>">
                        <a href="user_demo.php?type=Distributor">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Demo to Distributor</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='18'){ echo "active"; } */($_SESSION['nav'] == '27') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="user_demo.php?type=Retailer">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Demo to Retailer</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='19'){ echo "active"; } */($_SESSION['nav'] == '28') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="donortoreceiver.php?type=Distributor&type1=Company">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Company to Distributor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php
            ($_SESSION['nav'] == '29' || $_SESSION['nav'] == '30') ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Coupon</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='33'){ echo "active"; } */($_SESSION['nav'] == '29') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="add_coupon.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">Add Coupon</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='34'){ echo "active"; } */($_SESSION['nav'] == '30') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="coupon.php">
                            <i class="fa fa-rocket"></i>
                            <span class="submenu-title">List Coupon</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php
            ($_SESSION['nav'] == '31' || $_SESSION['nav'] == '32' || $_SESSION['nav'] == '33' ) ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>

                    </i>
                    <span class="menu-title">Alloted</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='2'){ echo "active"; } */($_SESSION['nav'] == '31') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="dse_alloted.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">DSE</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='3'){ echo "active"; } */($_SESSION['nav'] == '32') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="retailer_alloted.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">Retailer</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='4'){ echo "active"; } */($_SESSION['nav'] == '33') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="distributor_alloted.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">Distributor</span>
                        </a>
                    </li>
                </ul>

            </li>
            
			<li class="<?php
            /* if($_SESSION['nav']=='20'){ echo "active"; } */($_SESSION['nav'] == '34') ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="admin_details.php">
                    <i class="fa fa-lock fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Admin Login</span>
                </a>
            </li>
            <li class="<?php
            /* if($_SESSION['nav']=='21'){ echo "active"; } */($_SESSION['nav'] == '35') ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="login_details.php">
                    <i class="fa fa-lock fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Admin Login Details</span>
                </a>
            </li>
			
			<li class="<?php
            ($_SESSION['nav'] == '38' || $_SESSION['nav'] == '39' || $_SESSION['nav'] == '40' ) ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="#">
                    <i class="fa fa-tasks fa-fw">
                        <div class="icon-bg bg-pink"></div>

                    </i>
                    <span class="menu-title">Opening </span>
                    <span class="fa arrow"></span>
                </a>
				<ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='2'){ echo "active"; } */($_SESSION['nav'] == '38') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="opening_stock.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">Company to Distributer</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='2'){ echo "active"; } */($_SESSION['nav'] == '39') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="opening_balance_dse.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">Distributer to Dse</span>
                        </a>
                    </li>
                </ul>
				<ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='2'){ echo "active"; } */($_SESSION['nav'] == '40') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="opening_dse_details.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">Opening Details</span>
                        </a>
                    </li>
                </ul
				
                
                
            </li>
			
			<li class="<?php
            /* if($_SESSION['nav']=='20'){ echo "active"; } */($_SESSION['nav'] == '41') ? $store = "active" : $store = "";
            echo $store;
            ?>">
                <a href="#">
                    <i class="fa fa-credit-card-alt">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Credit</span>
					<span class="fa arrow"></span>
                </a>
				<ul class="nav nav-second-level">
                    <li class="<?php
                    /* if($_SESSION['nav']=='2'){ echo "active"; } */($_SESSION['nav'] == '41') ? $store = "active" : $store = "";
                    echo $store;
                    ?>">
                        <a href="list_credit.php">
                            <i class="fa fa-cogs"></i>
                            <span class="submenu-title">list</span>
                        </a>
                    </li>
                </ul>
            </li>
            
			<?php }
 			?>
            <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
        </ul>
    </div>
</nav>