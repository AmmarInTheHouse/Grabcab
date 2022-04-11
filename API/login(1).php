<?php
// login api and  insert to device_login table 
	include('conn.php');
	 date_default_timezone_set('Asia/Kolkata');
        $dbc = mysqli_connect(SERVER, USER, PASSWORD, DATABASE) or die('error connecting to MySQL server.');

        $uname=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $longitude=$_REQUEST['longitude'];
        $latitude=$_REQUEST['latitude'];
        $imei=$_REQUEST['imei'];
        
        $u_name=$uname;
        $pass=  $password;
		
		
        
        $sql = "SELECT u.id,u.username,u.password,d.assigned_route,d.phone from user u,user_demo ud, demo_number d where u.id=ud.user_id and ud.demo_id=d.id and u.username='$u_name' and u.password='$pass'";
	$result  =  mysqli_query($dbc,$sql); 
       
        $data = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);
        if($row==1 && strcasecmp($u_name,$data['username'])==0 && strcasecmp($pass,$data['password'])==0){
            
        $result =  mysqli_query($dbc,$sql); 
        $r = array();
        
       while($row1=mysqli_fetch_assoc($result)){
           $r[]= $row1;
       } 
	print  json_encode($r);
        
	$user_id=$data[id];
        $date=date('Y-m-d');
        $time=date('h:i:m');
	$ins_qry="insert into device_login(user_id,longitude,latitude,imei,date,time) values('$user_id','$longitude','$latitude','$imei','$date','$time')";
	mysqli_query($dbc,$ins_qry); 
	}
        else{
        echo"invalid login";
        
        }

?>