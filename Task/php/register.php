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
    $s=$c->prepare("insert into details(username,password) values(?,?)");
     $s->bind_param("ss",$email,$pass); 
$s->execute();
echo '<script>location.href = "profile.php";</script>';
$s->close();
 $c->close();

} ?>
