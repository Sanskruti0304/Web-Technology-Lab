<?php
session_start();

if(isset($_POST['loginbtn'])){
   
    $email = $_POST['email'];
    $password = $_POST['password'];


    $con = mysqli_connect('localhost','root','root','llogin');
    $sql = "INSERT INTO student1 VALUES ('$email','$password')";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
    }
    else{
        echo "Data not inserted";
        die(mysqli_error($con));
    }

}
?>