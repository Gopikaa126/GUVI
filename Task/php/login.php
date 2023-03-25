<?php 
  $email=$_POST["email"];
  $pass=$_POST["password"];
  
  $con= mysqli_connect('localhost','root','','guvi') ;

  $c= new mysqli('127.0.0.1','root','','guvi');
  if(mysqli_connect_error()){ 
    die("Connection ".mysqli_connect_error());
  }
  else
  {
    $sql = "select username , password from details where username = '$email' and password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>location.href = "home.php";</script>'; 
        }  
        else{  
            echo '<h1><script>alert("Login failed. Invalid username or password.")</script></h1>';
            echo '<script>location.href="zhhhh.php";</script>';  
            }
  }
  ?>