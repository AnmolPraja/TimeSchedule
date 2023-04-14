<?php
$host='localhost';
$username="root";
$password="";
$database="php";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    $query= "select email from tmt where email='" . $_POST['email'] . "' ";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "Email already used";
    }else{
        header('Location: register_user.php');
    }
}