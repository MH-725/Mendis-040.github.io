<?php
   
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'web';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        if($conn->connect_error){
            die('Connection Failed:'.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("Insert into contact(Name,Email,Message)value(?,?,?)");
            $stmt->bind_param("sss",$Name,$Email,$Message);
            $stmt->execute();
            echo "Resitration Successfully...";
            $stmt->close();
            $conn->close();
        }
?>