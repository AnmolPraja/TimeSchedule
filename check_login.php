<?php
$host='localhost';
$username="root";
$password="";
$database="php";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    if(!$conn){
        echo "Failed";
    }else{
        $query="select * from tmt where email='".$_POST['email']."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $data=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$data['password'])){
                echo 'Successfully Logged in';
                header('Location: table_sender.php');
            }else{
                echo 'Password incorrect';
            }
        }else{
            echo 'User not found';
        }
    }

}