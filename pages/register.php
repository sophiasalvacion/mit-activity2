<?php

include 'connection.php';

$fullName = $_POST['fullName'];
$number = $_POST['number'];
$userName = $_POST['userName'];
$regEmail = $_POST['regEmail'];
$regPassword = $_POST['regPassword'];

$qry = "INSERT INTO registration (fullName,number,userName,regEmail,regPassword) VALUES ('".$fullName."', '".$number."','".$userName."','".$regEmail."','".$regPassword."')";
$insert = mysqli_query($con,$qry);
if(!$insert){
    echo "There are some problems while inserting data";
}
else{
    echo "Registered Successfully";
}

?>