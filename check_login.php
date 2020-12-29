<?php
	session_start();
	require "config.inc.php";
	$strSQL = "SELECT * FROM member WHERE Email = '".mysql_real_escape_string($_POST['txtEmail'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysqli_query($con,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["Email"] = $objResult["Email"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "Amin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:index.html");
			}
	}
	mysql_close();
?>