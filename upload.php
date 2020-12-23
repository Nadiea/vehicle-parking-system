<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');



if(isset($_POST['submit'])){
    $username=$_POST['username'];
     $category=$_POST['category'];
     $number=$_POST['number'];
     $time=$_POST['time'];
    $charge=$_POST['charge'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    if($fileerror== 0){
        $insertuery = "insert into vehicleinfo(id,username,category,number,time,charge,address,phone) values('$id','$username','$category','$number','$time','$charge','$address','$phone')";
        $query = mysqli_query($con,$insertuery);
        if($query){
            echo "inserted";
        }else{
          echo "not inserted";  
        }
    }
}else{
    echo"NO BUTTON HAS BEEN CLICKED";
}
?>