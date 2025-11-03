<?php
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$host     = "localhost";
$user     = "root";
$pass     = "";
$database = "fyp";

$conn = mysqli_connect($host, $user, $pass, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$qry = "INSERT INTO registration (username, email, password) 
        VALUES ('$username', '$email', '$password')";

if(mysqli_query($conn, $qry)){
    echo "Data Saved Successfully!";
}else{
    echo "Not Saved: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
