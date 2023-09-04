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
        

    $uname = $_POST['username'];
    $pass = $_POST['pass'];
    
    $s = "SELECT * FROM registration WHERE username = '$uname' && password = '$pass'";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
                        header('location:Book.html');

    }
    else
    {
        echo "invaild details";
    }


?>