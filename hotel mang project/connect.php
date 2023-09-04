
<?php
	
	session_start();
	
        $servername = "localhost";    
        $username = "root";    
        $password = "";    
        $dbname = "test";    

            $conn = new mysqli($servername,$username,$password,$dbname);
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully"."<br>";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$birthday = $_POST['birthday'];
		$phone = $_POST['phone'];
			 
		$s = "SELECT * FROM registration WHERE username = '$username'";
		$result = mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);
			
		if($num != 0)
			{
				echo "Username Already Taken";
			}
		else
			{
				$reg = "INSERT INTO registration (name,email,username,password,repassword,dob,phone)
				VALUES ('$name', '$email', '$username','$password','$repassword','$birthday','$phone')";
				mysqli_query($conn,$reg);
				echo "Registration Successful";	
				header('location:login.html');
			}	
		
		
		$conn->close();




 ?>
