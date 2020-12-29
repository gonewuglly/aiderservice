<?php
   

   require "config.inc.php";
	
	if(trim($_POST["txtEmail"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	
	
	
    $strSQL = "SELECT * FROM member WHERE Email = '".trim($_POST["txtName"])."' ";
	$objQuery = mysqli_query($con,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member(Name,Email,Password,status) VALUES ('".$_POST["txtName"]."', 
		'".$_POST["txtEmail"]."','".$_POST["txtPassword"]."','User')";
        $objQuery = mysqli_query($con,$strSQL);	
		echo "<script>alert('สมัครสมาชิกสำเร็จ..!!');
				window.location ='login.php';
				</script>";
		
	}

?>