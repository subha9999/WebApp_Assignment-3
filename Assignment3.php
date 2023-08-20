<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phoneNumber'];
    $message=$_POST['message'];
    $link = mysqli_connect("localhost", "root", "", "formDB");
    if($link === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
    }   
   
    $sql = "INSERT INTO userInfo (firstName,lastName,email,phoneNumber,message) VALUES ( '$fname', '$lname','$email','$phone','$message')";

    if(mysqli_query($link,$sql)){
        echo "RECORDS ADDED SUCCESSFULLY!!!";
    }
    else{
        echo "ERROR: UNABLE TO EXECUTE QUERY." . mysqli_error($link);
    }
    mysqli_close($link);
?> 