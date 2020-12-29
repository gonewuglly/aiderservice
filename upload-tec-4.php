<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php

include 'config..inc.php';


for($i=0;$i<count($_FILES["filUpload"]["name"]);$i++)
{
	if($_FILES["filUpload"]["name"][$i] != "")
	{
		
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"][$i],"upload_images/".$_FILES["filUpload"]["name"][$i]))
		{
			
			$file = $_FILES["filUpload"]["name"][$i];
			$sql = "INSERT INTO tbl_image VALUES('null','$file')";
			$query = mysqli_query($con,$sql);
			  echo $file;
    		if(!$query){
        	echo "Error Query";
    		}
    		else{
        	echo"
        		<script>alert('เพิ่มข้อมูลสำเร็จ..!!')</script>"; 
        		header('location:index-tec.php');
      }
    }

		}
	}


?>
</body>
</html>