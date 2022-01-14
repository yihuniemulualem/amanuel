		
<?php
	session_start();//Start session
	require_once('connection.php');//Include database connection details
	
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	//Create query
	/*$qry="SELECT * FROM User_Type WHERE UserType='$UserType' AND UserName='$UserName' AND Password='$Password'";*/
		$qry="SELECT * FROM user_type WHERE UserName='$UserName' AND Password='".md5($Password)."'";
		$result=mysql_query($qry);
		
		$sel = mysql_fetch_array($result);
		$UserType =$sel['UserType'];
	//Check whether the query was successful or not
	if($result) {
		if((mysql_num_rows($result)== 1)&& ($UserType =='condominium')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['SESS_UTYPE'] = $sel['UserType'];
			$_SESSION['user_id'] = $sel['user_no'];
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:condominiumAdmin.php");
			exit();
		}
		else if((mysql_num_rows($result)== 1)&& ($UserType =='kebele')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			
			$_SESSION['user_id'] = $sel['user_no'];
			$_SESSION['SESS_UTYPE'] = $sel['UserType'];
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:kebeleAdmin.php");
			exit();
		}
		else if((mysql_num_rows($result) == 1)&& ($UserType =='bank')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['user_id'] = $sel['user_no'];
			$_SESSION['SESS_UTYPE'] = $sel['UserType'];
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:bankAdmin.php");
			exit();
		}
		else if((mysql_num_rows($result) == 1)&& ($UserType =='resident')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['ResidentId'] = $sel['ResidentId'];
			$_SESSION['SESS_UTYPE'] = $sel['UserType'];
			
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:residentLog.php");
			exit();
		}
	
		else {
			//Login failed
		header("location:login.php");
			//echo"please enter your password and your user name and select user type to select database";
		exit();
		}
	}
	else {
		die("synatx error in the query");
}
?>