<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connect = new mysqli('localhost','root','','web');
    if ($connect->connect_error) {
        die('Connection Failed!'.$connect->connect_error);
    }

    $query=mysqli_query($connect,"SELECT email, password FROM registration WHERE email='".$email."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0) {
        while($row=mysqli_fetch_assoc($query)){
            $dbemail=$row['email'];  
            $dbpassword=$row['password'];
        }
        if($email == $dbemail && $password == $dbpassword)  {  
            header("Location: homepage.html");  
        }
        else{
            header("Location: registration.html");  
        }
    }
    else{
        header("Location: registration.html");
    }

 ?>