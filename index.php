<?php
session_start();
include("constans.php");
?>
    <form method="POST" action="index.php" class="form">
        <div class="header-content"><h1>Log In</h1></div>
        <div class="body-content">
        
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="Username" name="username" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="Password" name="pwd" class="form-control"></div>
            </div>
            
            <div class="form-group pull-right">
                <button type="submit" name="submit" class="btn btn-success">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>

<?php
			
	if(isset($_REQUEST['submit']))
		{
			$dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');
			
			$uname=$_REQUEST['username'];
			$pass=$_REQUEST['pwd'];
	
			$sql="select * from login where username='".$uname."' and password='".$pass."'";
			$result=mysqli_query($dbc,$sql);
			$row=mysqli_num_rows($result);
	
			$data=mysqli_fetch_array($result);
			
			if($row>0 and $uname==$data['username'] and $pass==$data['password'])
				{
					$_SESSION['user']=$data['username'];
						echo "<script>location.href= 'customerdelete.php'</script>";
				}
			else
				{
					echo "Login Failed";
					flush();
				}
		}
		
		
?>
            <hr>
    </form>