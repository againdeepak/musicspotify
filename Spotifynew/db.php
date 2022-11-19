<?php
$server="localhost";
$user="root";
$password="";
$conn=mysqli_connect($server,$user,$password);
if($conn){
    echo "connection created";
}
if(isset()==$_POST['name']){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $query="INSERT INTO `visitors` (`name`, `email`, `feedback`) VALUES ('$name', '$email', '$feedback');"
}



?>