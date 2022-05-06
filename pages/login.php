<?php



include 'connection.php';

$regEmail = $_POST['regEmail'];
$password = $_POST['password'];

$qry = "SELECT * from registration where regEmail = '".$regEmail."' and regPassword = '".$password."'";
$get = mysqli_query($con,$qry);

$row = $get -> fetch_array(MYSQLI_ASSOC);

if(!$row){
    echo 'Invalid Email / Password';
} else {
    echo 'Logged In Successfully';
}

//Check the QRY ID if there is data, if not return the invalid data save the email in a session. 

// Two things to do. 
// 1. Create a session. 
// 2. Create a conditional statement.


?>