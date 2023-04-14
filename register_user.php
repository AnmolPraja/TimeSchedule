<?php
$host='localhost';
$username="root";
$password="";
$database="php";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $query="insert into tmt(username,email,password) values('".$_POST['username']."','".$_POST['email']."','".password_hash($_POST['password'],PASSWORD_DEFAULT)."')";
    if ($conn->query($query)==true) {
        echo "user registered";
        header('Location: login.php');
    }else{
        echo "failed";
    }
}
?>