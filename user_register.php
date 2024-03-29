<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'login_form';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $usname = $_POST['UserName'];   //must be equivalent to Database names also mention the name="" in HTML
    $emailid =  $_POST['EmailId'];
    $cred = $_POST['Credentials'];

    $sql = "INSERT INTO userdetails (UserName,EmailId, Credentials) VALUES ('$usname','$emailid','$cred')";

    if (mysqli_query($conn, $sql)) 
    {
        
        echo "<center><h1>Registered Successfully!!</h1></center>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
