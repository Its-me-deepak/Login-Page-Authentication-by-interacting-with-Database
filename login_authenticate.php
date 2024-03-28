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
    $usname = $_POST['usname'];
    $cred = $_POST['cred'];

    $sql = "INSERT INTO submissions (usname, cred) VALUES ('$usname', '$cred')";

    if (mysqli_query($conn, $sql)) 
    {
        
        echo "Message sent successfully!";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>