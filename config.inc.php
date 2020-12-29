<?php
class condb
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "aiderservice";
    public  $con;


    // Database Connection 
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
        if(mysqli_connect_error()) {
         trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        else{
        return $this->con;
        }
    }

    
		// Insert customer data into customer table
		public function insertData($post)
		{
            //---เช็ดกล่องข้อมูลที่ว่าง --//
			if(trim($_POST["txtName"]) == "")
			{
				header("Location:register.php?msg2=no");
			exit();	
			}
			if(trim($_POST["txtEmail"]) == "")
			{
				header("Location:register.php?msg2=no");
			exit();	
			}
			if(trim($_POST["txtPassword"]) == "")
			{
				header("Location:register.php?msg2=no");
			exit();	
			}
			if(trim($_POST["txtConPassword"]) == "")
			{
				header("Location:register.php?msg2=no");
			exit();	
            }
            if($_POST["txtConPassword"] != $_POST["txtPassword"])
			{
				header("Location:register.php?msg2=no");
			exit();	
            }
            // -- ดึงเข้าฐานข้อมูล --//
			$name = $this->con->real_escape_string($_POST['txtName']);
			$email = $this->con->real_escape_string($_POST['txtEmail']);
			$password = $this->con->real_escape_string($_POST['txtPassword']);
            $status = 'User';
    
			$query="INSERT INTO member (Name,Email,Password,Status) VALUES('$name','$email','$password','$status')";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:Login.php?msg1=insert");
			}else{
			    header("Location:register.php?msg3=nopass");
			}
		}



		public function displayData($post)
		{
			session_start();
			$email = $this->con->real_escape_string($_POST['txtEmail']);
			$password = $this->con->real_escape_string($_POST['txtPassword']);

		    $query = "SELECT * FROM member  WHERE Email = '$email' and Password = '$password' ";
		    $result = $this->con->query($query);
			$sql = $result->fetch_assoc();
			if(!$sql)
			{
				header("location:Login.php?msg2=no");
			}
			else
			{
			$_SESSION["Email"] = $sql["Email"];
			$_SESSION["Status"] = $sql["Status"];
			session_write_close();
			if($sql["Status"] == "Admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:index.php");
			}
	}
		}
	}
?>